<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/25/12
 * Time: 11:25 PM
 * To change this template use File | Settings | File Templates.
 */
class StyleForm extends BaseForm
{

    public function configure() {

    $this->setWidgets(array(
        'id' => new sfWidgetFormInputHidden(),
        'styleCode' => new sfWidgetFormInputText()
    ));

    $this->setValidators(array(
        'id' => new sfValidatorNumber(array('required' => false)),
        'styleCode' => new sfValidatorString(array('required' => true, 'max_length' => 120))
    ));

    $this->widgetSchema->setNameFormat('machine[%s]');

}

    public function save(){

    $code = $this->getValue('styleCode');
    $machine = new StyleCode();
    $machine->setStyleCode($code);
    $machine->save();

}

}
