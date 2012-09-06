<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/26/12
 * Time: 9:11 PM
 * To change this template use File | Settings | File Templates.
 */

class filterAction extends sfAction {

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

        $this->setForm(new FilterForm());
        $this->result = $request->getParameter('result');
        $this->listView = false;

        if ($request->isMethod('post')) {

            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid()) {
                $this->listView = true;
                $this->results = $this->form->filter();
            }
        }
    }
}