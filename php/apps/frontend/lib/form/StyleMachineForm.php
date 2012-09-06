<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/25/12
 * Time: 11:56 PM
 * To change this template use File | Settings | File Templates.
 */
class StyleMachineForm extends BaseForm
{
    public function configure() {

        $machineCodeList = $this->getMachineCodeList();
        $styleCodeList = $this->getStyleCodeList();

        $this->setWidgets(array(
            'machineCode' => new sfWidgetFormSelect(array('choices' => $machineCodeList)),
            'styleCode' => new sfWidgetFormSelect(array('choices' => $styleCodeList)),
            'frequency' => new sfWidgetFormInputText()
        ));

        $this->setValidators(array(
            'machineCode' => new sfValidatorString(array('required' => true)),
            'styleCode' => new sfValidatorString(array('required' => true)),
            'frequency' => new sfValidatorNumber(array('required' => true))
        ));

        $this->widgetSchema->setNameFormat('machine[%s]');

    }

    public function getMachineCodeList(){

        $dao = new MainDao();
        $machineCodeList = $dao->getMachineCodeList();
        $list = array("" => "-- " . 'Select' . " --");
        foreach ($machineCodeList as $machineCode) {
            $list[$machineCode->getId()] = $machineCode->getMachineCode();
        }
        return $list;
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

    public function save(){

        $styleMachine = new StyleMachine();
        $styleMachine->setMachineCode($this->getValue('machineCode'));
        $styleMachine->setStyleCode($this->getValue('styleCode'));
        $styleMachine->setFrequency($this->getValue('frequency'));
        $styleMachine->save();
    }
}
