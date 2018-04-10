<?php

/**
 * BaseCollectionTirelle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $collection_id
 * @property date $date_expedition
 * @property string $colori
 * @property string $metrage
 * @property string $bain
 * @property date $date_validation
 * @property date $date_refusation
 * @property date $date_retraitement
 * @property Collection $Collection
 * 
 * @method integer           getCollectionId()      Returns the current record's "collection_id" value
 * @method date              getDateExpedition()    Returns the current record's "date_expedition" value
 * @method string            getColori()            Returns the current record's "colori" value
 * @method string            getMetrage()           Returns the current record's "metrage" value
 * @method string            getBain()              Returns the current record's "bain" value
 * @method date              getDateValidation()    Returns the current record's "date_validation" value
 * @method date              getDateRefusation()    Returns the current record's "date_refusation" value
 * @method date              getDateRetraitement()  Returns the current record's "date_retraitement" value
 * @method Collection        getCollection()        Returns the current record's "Collection" value
 * @method CollectionTirelle setCollectionId()      Sets the current record's "collection_id" value
 * @method CollectionTirelle setDateExpedition()    Sets the current record's "date_expedition" value
 * @method CollectionTirelle setColori()            Sets the current record's "colori" value
 * @method CollectionTirelle setMetrage()           Sets the current record's "metrage" value
 * @method CollectionTirelle setBain()              Sets the current record's "bain" value
 * @method CollectionTirelle setDateValidation()    Sets the current record's "date_validation" value
 * @method CollectionTirelle setDateRefusation()    Sets the current record's "date_refusation" value
 * @method CollectionTirelle setDateRetraitement()  Sets the current record's "date_retraitement" value
 * @method CollectionTirelle setCollection()        Sets the current record's "Collection" value
 * 
 * @package    nathanmode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCollectionTirelle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('collection_tirelle');
        $this->hasColumn('collection_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('date_expedition', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('colori', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('metrage', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('bain', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('date_validation', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('date_refusation', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('date_retraitement', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Collection', array(
             'local' => 'collection_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}