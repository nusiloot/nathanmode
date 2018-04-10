<?php

/**
 * BasePrixSpecial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $saison_id
 * @property integer $fournisseur_id
 * @property integer $client_id
 * @property string $article
 * @property double $prix_production
 * @property date $date
 * @property Saison $Saison
 * @property Fournisseur $Fournisseur
 * @property Client $Client
 * @property Doctrine_Collection $PrixSpecialDetails
 * 
 * @method integer             getSaisonId()           Returns the current record's "saison_id" value
 * @method integer             getFournisseurId()      Returns the current record's "fournisseur_id" value
 * @method integer             getClientId()           Returns the current record's "client_id" value
 * @method string              getArticle()            Returns the current record's "article" value
 * @method double              getPrixProduction()     Returns the current record's "prix_production" value
 * @method date                getDate()               Returns the current record's "date" value
 * @method Saison              getSaison()             Returns the current record's "Saison" value
 * @method Fournisseur         getFournisseur()        Returns the current record's "Fournisseur" value
 * @method Client              getClient()             Returns the current record's "Client" value
 * @method Doctrine_Collection getPrixSpecialDetails() Returns the current record's "PrixSpecialDetails" collection
 * @method PrixSpecial         setSaisonId()           Sets the current record's "saison_id" value
 * @method PrixSpecial         setFournisseurId()      Sets the current record's "fournisseur_id" value
 * @method PrixSpecial         setClientId()           Sets the current record's "client_id" value
 * @method PrixSpecial         setArticle()            Sets the current record's "article" value
 * @method PrixSpecial         setPrixProduction()     Sets the current record's "prix_production" value
 * @method PrixSpecial         setDate()               Sets the current record's "date" value
 * @method PrixSpecial         setSaison()             Sets the current record's "Saison" value
 * @method PrixSpecial         setFournisseur()        Sets the current record's "Fournisseur" value
 * @method PrixSpecial         setClient()             Sets the current record's "Client" value
 * @method PrixSpecial         setPrixSpecialDetails() Sets the current record's "PrixSpecialDetails" collection
 * 
 * @package    nathanmode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePrixSpecial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('prix_special');
        $this->hasColumn('saison_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fournisseur_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('client_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('article', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('prix_production', 'double', null, array(
             'type' => 'double',
             ));
        $this->hasColumn('date', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Saison', array(
             'local' => 'saison_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Fournisseur', array(
             'local' => 'fournisseur_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Client', array(
             'local' => 'client_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('PrixSpecialDetail as PrixSpecialDetails', array(
             'local' => 'id',
             'foreign' => 'prix_special_id'));
    }
}