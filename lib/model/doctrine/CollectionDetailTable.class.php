<?php

/**
 * CollectionDetailTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CollectionDetailTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CollectionDetailTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CollectionDetail');
    }
    
    public function getAll() {
        return $this->createQuery('d')->execute();
    }
}