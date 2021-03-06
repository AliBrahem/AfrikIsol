<?php

namespace Proxies\__CG__\BackOffice\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Avancement extends \BackOffice\AdminBundle\Entity\Avancement implements \Doctrine\ORM\Proxy\Proxy
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

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function getChargePrefaHr()
    {
        $this->__load();
        return parent::getChargePrefaHr();
    }

    public function getChargePrefaHommes()
    {
        $this->__load();
        return parent::getChargePrefaHommes();
    }

    public function getChargePrevMontaHr()
    {
        $this->__load();
        return parent::getChargePrevMontaHr();
    }

    public function getChargePrevMontaHommes()
    {
        $this->__load();
        return parent::getChargePrevMontaHommes();
    }

    public function getChargeReelleMontaHr()
    {
        $this->__load();
        return parent::getChargeReelleMontaHr();
    }

    public function getChargeReelleMontaHomme()
    {
        $this->__load();
        return parent::getChargeReelleMontaHomme();
    }

    public function getQuantite()
    {
        $this->__load();
        return parent::getQuantite();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
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

    public function setDate(\DateTime $date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function setChargePrefaHr($chargePrefaHr)
    {
        $this->__load();
        return parent::setChargePrefaHr($chargePrefaHr);
    }

    public function setChargePrefaHommes($chargePrefaHommes)
    {
        $this->__load();
        return parent::setChargePrefaHommes($chargePrefaHommes);
    }

    public function setChargePrevMontaHr($chargePrevMontaHr)
    {
        $this->__load();
        return parent::setChargePrevMontaHr($chargePrevMontaHr);
    }

    public function setChargePrevMontaHommes($chargePrevMontaHommes)
    {
        $this->__load();
        return parent::setChargePrevMontaHommes($chargePrevMontaHommes);
    }

    public function setChargeReelleMontaHr($chargeReelleMontaHr)
    {
        $this->__load();
        return parent::setChargeReelleMontaHr($chargeReelleMontaHr);
    }

    public function setChargeReelleMontaHomme($chargeReelleMontaHomme)
    {
        $this->__load();
        return parent::setChargeReelleMontaHomme($chargeReelleMontaHomme);
    }

    public function setQuantite($quantite)
    {
        $this->__load();
        return parent::setQuantite($quantite);
    }

    public function setIsolant(\BackOffice\AdminBundle\Entity\Tole $isolant = NULL)
    {
        $this->__load();
        return parent::setIsolant($isolant);
    }

    public function getIsolant()
    {
        $this->__load();
        return parent::getIsolant();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'date', 'chargePrefaHr', 'chargePrefaHommes', 'chargePrevMontaHr', 'chargePrevMontaHommes', 'chargeReelleMontaHr', 'chargeReelleMontaHomme', 'quantite', 'idprojet', 'isolant');
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