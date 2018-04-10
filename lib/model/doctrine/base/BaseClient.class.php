<?php

/**
 * BaseClient
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $raison_sociale
 * @property string $telephone
 * @property string $adresse_livraison
 * @property string $code_postal_livraison
 * @property string $ville_livraison
 * @property string $adresse_facturation
 * @property string $code_postal_facturation
 * @property string $ville_facturation
 * @property string $condition_paiement
 * @property Doctrine_Collection $Coupes
 * @property Doctrine_Collection $LabDips
 * @property Doctrine_Collection $PrixSpeciaux
 * @property Doctrine_Collection $Collections
 * @property Doctrine_Collection $Bons
 * @property Doctrine_Collection $Commandes
 * 
 * @method string              getRaisonSociale()           Returns the current record's "raison_sociale" value
 * @method string              getTelephone()               Returns the current record's "telephone" value
 * @method string              getAdresseLivraison()        Returns the current record's "adresse_livraison" value
 * @method string              getCodePostalLivraison()     Returns the current record's "code_postal_livraison" value
 * @method string              getVilleLivraison()          Returns the current record's "ville_livraison" value
 * @method string              getAdresseFacturation()      Returns the current record's "adresse_facturation" value
 * @method string              getCodePostalFacturation()   Returns the current record's "code_postal_facturation" value
 * @method string              getVilleFacturation()        Returns the current record's "ville_facturation" value
 * @method string              getConditionPaiement()       Returns the current record's "condition_paiement" value
 * @method Doctrine_Collection getCoupes()                  Returns the current record's "Coupes" collection
 * @method Doctrine_Collection getLabDips()                 Returns the current record's "LabDips" collection
 * @method Doctrine_Collection getPrixSpeciaux()            Returns the current record's "PrixSpeciaux" collection
 * @method Doctrine_Collection getCollections()             Returns the current record's "Collections" collection
 * @method Doctrine_Collection getBons()                    Returns the current record's "Bons" collection
 * @method Doctrine_Collection getCommandes()               Returns the current record's "Commandes" collection
 * @method Client              setRaisonSociale()           Sets the current record's "raison_sociale" value
 * @method Client              setTelephone()               Sets the current record's "telephone" value
 * @method Client              setAdresseLivraison()        Sets the current record's "adresse_livraison" value
 * @method Client              setCodePostalLivraison()     Sets the current record's "code_postal_livraison" value
 * @method Client              setVilleLivraison()          Sets the current record's "ville_livraison" value
 * @method Client              setAdresseFacturation()      Sets the current record's "adresse_facturation" value
 * @method Client              setCodePostalFacturation()   Sets the current record's "code_postal_facturation" value
 * @method Client              setVilleFacturation()        Sets the current record's "ville_facturation" value
 * @method Client              setConditionPaiement()       Sets the current record's "condition_paiement" value
 * @method Client              setCoupes()                  Sets the current record's "Coupes" collection
 * @method Client              setLabDips()                 Sets the current record's "LabDips" collection
 * @method Client              setPrixSpeciaux()            Sets the current record's "PrixSpeciaux" collection
 * @method Client              setCollections()             Sets the current record's "Collections" collection
 * @method Client              setBons()                    Sets the current record's "Bons" collection
 * @method Client              setCommandes()               Sets the current record's "Commandes" collection
 * 
 * @package    nathanmode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClient extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('client');
        $this->hasColumn('raison_sociale', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('telephone', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('adresse_livraison', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('code_postal_livraison', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
        $this->hasColumn('ville_livraison', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('adresse_facturation', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('code_postal_facturation', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
        $this->hasColumn('ville_facturation', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('condition_paiement', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Coupe as Coupes', array(
             'local' => 'id',
             'foreign' => 'client_id'));

        $this->hasMany('LabDip as LabDips', array(
             'local' => 'id',
             'foreign' => 'client_id'));

        $this->hasMany('PrixSpecial as PrixSpeciaux', array(
             'local' => 'id',
             'foreign' => 'client_id'));

        $this->hasMany('Collection as Collections', array(
             'local' => 'id',
             'foreign' => 'client_id'));

        $this->hasMany('Bon as Bons', array(
             'local' => 'id',
             'foreign' => 'client_id'));

        $this->hasMany('Commande as Commandes', array(
             'local' => 'id',
             'foreign' => 'client_id'));
    }
}