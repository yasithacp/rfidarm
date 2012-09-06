<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/26/12
 * Time: 12:12 AM
 * To change this template use File | Settings | File Templates.
 */

class orderProductAction extends sfAction {

    public function execute($request) {

        $dao = new MainDao();
        $this->products = $dao->getProductsList();
        $this->components = $dao->getComponentList();
    }
}