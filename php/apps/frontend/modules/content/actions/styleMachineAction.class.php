<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/26/12
 * Time: 12:12 AM
 * To change this template use File | Settings | File Templates.
 */

class styleMachineAction extends sfAction {

    /**
     * @param sfForm $form
     * @return
     */
    public function setForm(sfForm $form) {
        if (is_null($this->form)) {
            $this->form = $form;
        }
    }

    public function execute($request) {

        $this->setForm(new StyleMachineForm());
        $this->isSaved = $request->getParameter('isSaved');

        if ($request->isMethod('post')) {

            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid()) {
                $this->form->save();
                $this->redirect('content/styleMachine?isSaved=yes');

            }
        }
    }
}