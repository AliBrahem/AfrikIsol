<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="Stock")
 * @ORM\Entity
 */
class Stock {
    
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;   
    
    
    /**
     * @var date
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;
    
    /**
     * @var string
     *
     * @ORM\Column(name="NatureMVT", type="string", length=255, nullable=false)
     */
    private $nature;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Designation", type="string", length=255, nullable=false)
     */
    private $designation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Unité", type="string", length=255, nullable=false)
     */
    private $unite;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="integer", nullable=false)
     */
    private $nombre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="QuantiteDispo", type="integer", nullable=false)
     */
    private $qtedispo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="QuantiteDemande", type="integer", nullable=false)
     */
    private $qtedemande;
    
    /**
     * @var string
     *
     * @ORM\Column(name="QuantiteStock", type="integer", nullable=false)
     */
    private $qteStock;
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getNature() {
        return $this->nature;
    }

    function getDesignation() {
        return $this->designation;
    }

    function getUnite() {
        return $this->unite;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getQtedispo() {
        return $this->qtedispo;
    }

    function getQtedemande() {
        return $this->qtedemande;
    }

    function getQteStock() {
        return $this->qteStock;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setNature($nature) {
        $this->nature = $nature;
    }

    function setDesignation($designation) {
        $this->designation = $designation;
    }

    function setUnite($unite) {
        $this->unite = $unite;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setQtedispo($qtedispo) {
        $this->qtedispo = $qtedispo;
    }

    function setQtedemande($qtedemande) {
        $this->qtedemande = $qtedemande;
    }

    function setQteStock($qteStock) {
        $this->qteStock = $qteStock;
    }


    
}