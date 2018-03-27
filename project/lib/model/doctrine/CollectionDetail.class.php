<?php

/**
 * CollectionDetail
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    nathanmode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class CollectionDetail extends BaseCollectionDetail
{

    public function __toString()
    {
        
        return sprintf("%s / %s / %s", $this->colori, $this->metrage, $this->prix); 
    }

    public function delete(Doctrine_Connection $conn = null)
    {
    	if ($commande = $this->getCommande()) {
    		$commande->delete();
    	}
        parent::delete($conn);
    }
    
  public function save(Doctrine_Connection $conn = null)
  {
  	$commande = $this->updateCommande();
 	//$commande->save();
 	//$this->setCommandeId($commande->getId());
 	//$this->setCommande($commande);
    return parent::save($conn);
  }
  
  public function updateCommande()
  {
  	$commande = ($this->isNew())? new Commande() : $this->getCommande();
  	$commande->setSaisonId($this->getCollection()->getSaisonId());
    $commande->setFournisseurId($this->getCollection()->getFournisseurId());
    $commande->setCommercialId($this->getCollection()->getCommercialId());
    $commande->setClientId($this->getCollection()->getClientId());
    $commande->setDeviseMontantId($this->getDeviseId());
    $commande->setDeviseFournisseurId($this->getCollection()->getDeviseFournisseurId());
    $commande->setDeviseCommercialId($this->getCollection()->getDeviseCommercialId());
  	if ($this->getCollection()->getPrixFournisseur() != "" || $this->getCollection()->getDeviseFournisseurId() != Devise::POURCENTAGE_ID)
    	$commande->setPrixFournisseur($this->getCollection()->getPrixFournisseur());
    else {
    	$commande->setPrixFournisseur($this->getCollection()->getFournisseur()->getCommission());
    	$commande->setDeviseFournisseurId($this->getCollection()->getFournisseur()->getDeviseId());
    }
    if ($this->getCollection()->getPrixCommercial() != "" || $this->getCollection()->getDeviseCommercialId() != Devise::POURCENTAGE_ID)
    	$commande->setPrixCommercial($this->getCollection()->getPrixCommercial());
    else {
    	$commande->setPrixCommercial($this->getCollection()->getCommercial()->getCommission());
    	$commande->setDeviseCommercialId($this->getCollection()->getCommercial()->getDeviseId());
    }
    $commande->setNumero($this->getCollection()->getNumCommande());
    $commande->setDate($this->getCollection()->getDateCommande());
	$commande->setColori($this->getColori());
    $commande->setMontant($this->getMetrage() * $this->getPrix());
    $commande->setMetrage($this->getMetrage());
    $commande->setPiece($this->getPiece());
    $commande->setQualite($this->getCollection()->getQualite());
    $commande->setSituation($this->getCollection()->getSituation());
    if ($this->getCollection()->getProduction())
    	$commande->setRelation(Commande::TYPE_PRODUCTION);
    else
    	$commande->setRelation(Commande::TYPE_COLLECTION);
    
    if ($this->getCollection()->getDeviseFournisseur() == Devise::POURCENTAGE) {
    	try {
    		$commande->setTotalFournisseur($this->getMetrage() * $this->getPrix() * $commande->getPrixFournisseur() / 100);
    	} catch (Exception $e) {
    		$commande->setTotalFournisseur(0);
    	}
    } else {
    	$commande->setTotalFournisseur($this->getCollection()->getPrixFournisseur());
    }
    
    if ($this->getCollection()->getDeviseCommercial() == Devise::POURCENTAGE) {
    	try {
    		$commande->setTotalCommercial($this->getMetrage() * $this->getPrix() * $commande->getPrixCommercial() / 100);
    	} catch (Exception $e) {
    		$commande->setTotalCommercial(0);
    	}
    } else {
    	$commande->setTotalCommercial($this->getCollection()->getPrixCommercial());
    }
    return $commande;
  }
}