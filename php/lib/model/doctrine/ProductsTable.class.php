<?php

/**
 * ProductsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProductsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProductsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Products');
    }
}