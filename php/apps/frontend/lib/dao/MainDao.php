<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yasitha
 * Date: 6/26/12
 * Time: 12:06 AM
 * To change this template use File | Settings | File Templates.
 */
class MainDao
{
    public function getProductsList()
    {
        try {
            $q = Doctrine_Query :: create()
                ->from('Products');
            return $q->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getComponentList()
    {
        try {
            $q = Doctrine_Query :: create()
                ->from('Components');
            return $q->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getStyleMachineListByStyleCode($code)
    {
        try {
            $q = Doctrine_Query :: create()
                ->from('StyleMachine')
                ->where('style_code = ?', $code);
            return $q->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}
