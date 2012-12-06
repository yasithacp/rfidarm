<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 12/4/12
 * Time: 3:46 PM
 * To change this template use File | Settings | File Templates.
 */
class getProductComponentListAsJsonAction extends  sfAction
{
    /**
     *
     * @param <type> $request
     * @return <type>
     */
    public function execute($request) {

        $this->setLayout(false);
        sfConfig::set('sf_web_debug', false);
        sfConfig::set('sf_debug', false);

        if ($this->getRequest()->isXmlHttpRequest()) {
            $this->getResponse()->setHttpHeader('Content-Type', 'application/json; charset=utf-8');
        }

        $dao = new MainDao();
        $component = $dao->getProductComponentList();
        $products = $dao->getProductsList();
        $results = $dao->getProductComponentList();

        return $this->renderText(json_encode(array("products" => $products->toArray(), "components" => $component->toArray(), "map" => $results->toArray())));
    }
}
