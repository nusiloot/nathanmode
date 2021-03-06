<?php

/**
 * BaseSaison
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $libelle
 * @property Doctrine_Collection $Coupes
 * @property Doctrine_Collection $LabDips
 * @property Doctrine_Collection $PrixSpeciaux
 * @property Doctrine_Collection $Collections
 * @property Doctrine_Collection $Bons
 * @property Doctrine_Collection $Commandes
 * 
 * @method string              getLibelle()      Returns the current record's "libelle" value
 * @method Doctrine_Collection getCoupes()       Returns the current record's "Coupes" collection
 * @method Doctrine_Collection getLabDips()      Returns the current record's "LabDips" collection
 * @method Doctrine_Collection getPrixSpeciaux() Returns the current record's "PrixSpeciaux" collection
 * @method Doctrine_Collection getCollections()  Returns the current record's "Collections" collection
 * @method Doctrine_Collection getBons()         Returns the current record's "Bons" collection
 * @method Doctrine_Collection getCommandes()    Returns the current record's "Commandes" collection
 * @method Saison              setLibelle()      Sets the current record's "libelle" value
 * @method Saison              setCoupes()       Sets the current record's "Coupes" collection
 * @method Saison              setLabDips()      Sets the current record's "LabDips" collection
 * @method Saison              setPrixSpeciaux() Sets the current record's "PrixSpeciaux" collection
 * @method Saison              setCollections()  Sets the current record's "Collections" collection
 * @method Saison              setBons()         Sets the current record's "Bons" collection
 * @method Saison              setCommandes()    Sets the current record's "Commandes" collection
 * 
 * @package    nathanmode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSaison extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('saison');
        $this->hasColumn('libelle', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Coupe as Coupes', array(
             'local' => 'id',
             'foreign' => 'saison_id'));

        $this->hasMany('LabDip as LabDips', array(
             'local' => 'id',
             'foreign' => 'saison_id'));

        $this->hasMany('PrixSpecial as PrixSpeciaux', array(
             'local' => 'id',
             'foreign' => 'saison_id'));

        $this->hasMany('Collection as Collections', array(
             'local' => 'id',
             'foreign' => 'saison_id'));

        $this->hasMany('Bon as Bons', array(
             'local' => 'id',
             'foreign' => 'saison_id'));

        $this->hasMany('Commande as Commandes', array(
             'local' => 'id',
             'foreign' => 'saison_id'));
    }
}