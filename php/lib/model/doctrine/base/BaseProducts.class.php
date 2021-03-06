<?php

/**
 * BaseProducts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $product_id
 * @property string $name
 * @property Doctrine_Collection $ProductComponents
 * 
 * @method integer             getProductId()         Returns the current record's "product_id" value
 * @method string              getName()              Returns the current record's "name" value
 * @method Doctrine_Collection getProductComponents() Returns the current record's "ProductComponents" collection
 * @method Products            setProductId()         Sets the current record's "product_id" value
 * @method Products            setName()              Sets the current record's "name" value
 * @method Products            setProductComponents() Sets the current record's "ProductComponents" collection
 * 
 * @package    Achala
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProducts extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('products');
        $this->hasColumn('product_id', 'integer', 6, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 6,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ProductComponents', array(
             'local' => 'product_id',
             'foreign' => 'product_id'));
    }
}