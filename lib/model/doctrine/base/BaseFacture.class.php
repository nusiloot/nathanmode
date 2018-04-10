<?php

/**
 * BaseFacture
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Doctrine_Collection $Coupes
 * @property Doctrine_Collection $CollectionLivraisons
 * 
 * @method Doctrine_Collection getCoupes()               Returns the current record's "Coupes" collection
 * @method Doctrine_Collection getCollectionLivraisons() Returns the current record's "CollectionLivraisons" collection
 * @method Facture             setCoupes()               Sets the current record's "Coupes" collection
 * @method Facture             setCollectionLivraisons() Sets the current record's "CollectionLivraisons" collection
 * 
 * @package    nathanmode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFacture extends Bon
{
    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Coupe as Coupes', array(
             'local' => 'id',
             'foreign' => 'facture_id'));

        $this->hasMany('CollectionLivraison as CollectionLivraisons', array(
             'local' => 'id',
             'foreign' => 'facture_id'));
    }
}