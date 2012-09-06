<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/26/12
 * Time: 8:59 PM
 * To change this template use File | Settings | File Templates.
 */
class FilterForm extends BaseForm
{
    public function configure() {

        $criteriaList = $this->getCriteriaList();
        $styleCodeList = $this->getStyleCodeList();

        $this->setWidgets(array(
            'styleCode' => new sfWidgetFormSelect(array('choices' => $styleCodeList)),
            'filterCriteria' => new sfWidgetFormChoice(array(
                'choices'  => $criteriaList,
                'expanded' => true,
            ))
        ));

        $this->setValidators(array(
            'styleCode' => new sfValidatorNumber(array('required' => true)),
            'filterCriteria' => new sfValidatorNumber(array('required' => true)),
        ));

        $this->setDefault('filterCriteria', '0');

        $this->widgetSchema->setNameFormat('filter[%s]');

    }

    public function getStyleCodeList(){

        $dao = new MainDao();
        $styleCodeList = $dao->getStyleCodeList();
        $list = array("" => "-- " . 'Select' . " --");
        foreach ($styleCodeList as $styleCode) {
            $list[$styleCode->getId()] = $styleCode->getStyleCode();
        }
        return $list;
    }

    public function getCriteriaList(){

        return array('All similar machine type & all similar frequency',
                     'All similar machine type & all frequency different from 1',
                     'More than 50% similar machine type & all similar frequency',
                     'More than 50% similar machine type & all frequency different from 1',
                     'More than 75% similar machine type & all similar frequency',
                     'More than 75% similar machine type & all frequency different from 1',
               );
    }

    public function filter(){

        $code = $this->getValue('styleCode');
        $criteria = $this->getValue('filterCriteria');
        $dao = new MainDao();
        $records = $dao->filter($code, $criteria);
        return $records;
    }
}
