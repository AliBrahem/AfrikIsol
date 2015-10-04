<?php

namespace Proxies\__CG__\BackOffice\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Tole extends \BackOffice\AdminBundle\Entity\Tole implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getDiametreinter()
    {
        $this->__load();
        return parent::getDiametreinter();
    }

    public function getPouce()
    {
        $this->__load();
        return parent::getPouce();
    }

    public function getDnext()
    {
        $this->__load();
        return parent::getDnext();
    }

    public function getEpaisseur()
    {
        $this->__load();
        return parent::getEpaisseur();
    }

    public function getDnisole()
    {
        $this->__load();
        return parent::getDnisole();
    }

    public function getCirc()
    {
        $this->__load();
        return parent::getCirc();
    }

    public function getRecouv()
    {
        $this->__load();
        return parent::getRecouv();
    }

    public function getQuantite()
    {
        $this->__load();
        return parent::getQuantite();
    }

    public function getDechet()
    {
        $this->__load();
        return parent::getDechet();
    }

    public function getQtebrute()
    {
        $this->__load();
        return parent::getQtebrute();
    }

    public function getPrixUnitaireTole()
    {
        $this->__load();
        return parent::getPrixUnitaireTole();
    }

    public function getPrixUnitaireIsolantMm()
    {
        $this->__load();
        return parent::getPrixUnitaireIsolantMm();
    }

    public function getPrixUnitaireIsolantML()
    {
        $this->__load();
        return parent::getPrixUnitaireIsolantML();
    }

    public function getPrix()
    {
        $this->__load();
        return parent::getPrix();
    }

    public function getPrixMO()
    {
        $this->__load();
        return parent::getPrixMO();
    }

    public function getAccessoires()
    {
        $this->__load();
        return parent::getAccessoires();
    }

    public function getEchaffaudage()
    {
        $this->__load();
        return parent::getEchaffaudage();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getTempsprefa()
    {
        $this->__load();
        return parent::getTempsprefa();
    }

    public function getTempsMonta()
    {
        $this->__load();
        return parent::getTempsMonta();
    }

    public function getTempsPrefaMonta()
    {
        $this->__load();
        return parent::getTempsPrefaMonta();
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function getUnite()
    {
        $this->__load();
        return parent::getUnite();
    }

    public function getNbCouche()
    {
        $this->__load();
        return parent::getNbCouche();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function setDiametreinter($diametreinter)
    {
        $this->__load();
        return parent::setDiametreinter($diametreinter);
    }

    public function setPouce($pouce)
    {
        $this->__load();
        return parent::setPouce($pouce);
    }

    public function setDnext($dnext)
    {
        $this->__load();
        return parent::setDnext($dnext);
    }

    public function setEpaisseur($epaisseur)
    {
        $this->__load();
        return parent::setEpaisseur($epaisseur);
    }

    public function setDnisole($dnisole)
    {
        $this->__load();
        return parent::setDnisole($dnisole);
    }

    public function setCirc($circ)
    {
        $this->__load();
        return parent::setCirc($circ);
    }

    public function setRecouv($recouv)
    {
        $this->__load();
        return parent::setRecouv($recouv);
    }

    public function setQuantite($quantite)
    {
        $this->__load();
        return parent::setQuantite($quantite);
    }

    public function setDechet($dechet)
    {
        $this->__load();
        return parent::setDechet($dechet);
    }

    public function setQtebrute($qtebrute)
    {
        $this->__load();
        return parent::setQtebrute($qtebrute);
    }

    public function setPrixUnitaireTole($prixUnitaireTole)
    {
        $this->__load();
        return parent::setPrixUnitaireTole($prixUnitaireTole);
    }

    public function setPrixUnitaireIsolantMm($prixUnitaireIsolantMm)
    {
        $this->__load();
        return parent::setPrixUnitaireIsolantMm($prixUnitaireIsolantMm);
    }

    public function setPrixUnitaireIsolantML($prixUnitaireIsolantML)
    {
        $this->__load();
        return parent::setPrixUnitaireIsolantML($prixUnitaireIsolantML);
    }

    public function setPrix($prix)
    {
        $this->__load();
        return parent::setPrix($prix);
    }

    public function setPrixMO($prixMO)
    {
        $this->__load();
        return parent::setPrixMO($prixMO);
    }

    public function setAccessoires($accessoires)
    {
        $this->__load();
        return parent::setAccessoires($accessoires);
    }

    public function setEchaffaudage($echaffaudage)
    {
        $this->__load();
        return parent::setEchaffaudage($echaffaudage);
    }

    public function setTempsprefa($tempsprefa)
    {
        $this->__load();
        return parent::setTempsprefa($tempsprefa);
    }

    public function setTempsMonta($tempsMonta)
    {
        $this->__load();
        return parent::setTempsMonta($tempsMonta);
    }

    public function setTempsPrefaMonta($tempsPrefaMonta)
    {
        $this->__load();
        return parent::setTempsPrefaMonta($tempsPrefaMonta);
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function setUnite($unite)
    {
        $this->__load();
        return parent::setUnite($unite);
    }

    public function setNbCouche($nbCouche)
    {
        $this->__load();
        return parent::setNbCouche($nbCouche);
    }

    public function setIdprojet(\BackOffice\AdminBundle\Entity\Projet $idprojet = NULL)
    {
        $this->__load();
        return parent::setIdprojet($idprojet);
    }

    public function getIdprojet()
    {
        $this->__load();
        return parent::getIdprojet();
    }

    public function getQtenet()
    {
        $this->__load();
        return parent::getQtenet();
    }

    public function setQtenet($qtenet)
    {
        $this->__load();
        return parent::setQtenet($qtenet);
    }

    public function getEtat()
    {
        $this->__load();
        return parent::getEtat();
    }

    public function setEtat($etat)
    {
        $this->__load();
        return parent::setEtat($etat);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'diametreinter', 'pouce', 'dnext', 'epaisseur', 'dnisole', 'circ', 'recouv', 'quantite', 'dechet', 'qtebrute', 'qtenet', 'prixUnitaireTole', 'prixUnitaireIsolantMm', 'prixUnitaireIsolantML', 'prix', 'prixMO', 'accessoires', 'echaffaudage', 'tempsprefa', 'tempsMonta', 'tempsPrefaMonta', 'type', 'unite', 'nbCouche', 'etat', 'idprojet');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}