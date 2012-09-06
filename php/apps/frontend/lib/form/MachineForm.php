<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/25/12
 * Time: 10:35 PM
 * To change this template use File | Settings | File Templates.
 */
class MachineForm extends BaseForm
{

    public function configure() {

        $this->setWidgets(array(
            'id' => new sfWidgetFormInputHidden(),
            'machineCode' => new sfWidgetFormInputText()
        ));

        $this->setValidators(array(
            'id' => new sfValidatorNumber(array('required' => false)),
            'machineCode' => new sfValidatorString(array('required' => true, 'max_length' => 120))
        ));

        $this->widgetSchema->setNameFormat('machine[%s]');

    }

    public function save(){

        $code = $this->getValue('machineCode');
        $machine = new MachineCode();
        $machine->setMachineCode($code);
        $machine->save();

    }

}
