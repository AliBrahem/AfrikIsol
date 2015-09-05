<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="MAD")
 */
class MAD {
   
    
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Projet", type="integer", nullable=false)
     */
    protected $idprojet;
    
    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", nullable=false)
     */
    protected $designation;
    
    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DNext", type="integer", nullable=false)
     */
    private $dnext;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Longueur", type="float", nullable=false)
     */
    private $longueur;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Coude90", type="integer", nullable=true)
     */
    private $coude90;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Coude45", type="integer", nullable=true)
     */
    private $coude45;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Reduction", type="integer", nullable=true)
     */
    private $reduction;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Te", type="integer", nullable=true)
     */
    private $te;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Brides", type="integer", nullable=true)
     */
    private $brides;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Vannes", type="integer", nullable=true)
     */
    private $vannes;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Epaisseur", type="integer", nullable=false)
     */
    private $epaisseur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Couche1", type="string", nullable=false)
     */
    protected $couche1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Couche2", type="string", nullable=true)
     */
    protected $couche2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Couche3", type="string", nullable=true)
     */
    protected $couche3;
    
    /**
     * @var float
     *
     * @ORM\Column(name="Quantite", type="float", nullable=false)
     */
    private $quantite;
    
    function getId() {
        return $this->id;
    }

    function getIdprojet() {
        return $this->idprojet;
    }

    function getDesignation() {
        return $this->designation;
    }

    function getDate() {
        return $this->date;
    }

    function getDnext() {
        return $this->dnext;
    }

    function getLongueur() {
        return $this->longueur;
    }

    function getCoude90() {
        return $this->coude90;
    }

    function getCoude45() {
        return $this->coude45;
    }

    function getReduction() {
        return $this->reduction;
    }

    function getTe() {
        return $this->te;
    }

    function getBrides() {
        return $this->brides;
    }

    function getVannes() {
        return $this->vannes;
    }

    function getEpaisseur() {
        return $this->epaisseur;
    }

    function getCouche1() {
        return $this->couche1;
    }

    function getCouche2() {
        return $this->couche2;
    }

    function getCouche3() {
        return $this->couche3;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdprojet($idprojet) {
        $this->idprojet = $idprojet;
    }

    function setDesignation($designation) {
        $this->designation = $designation;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setDnext($dnext) {
        $this->dnext = $dnext;
    }

    function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    function setCoude90($coude90) {
        $this->coude90 = $coude90;
    }

    function setCoude45($coude45) {
        $this->coude45 = $coude45;
    }

    function setReduction($reduction) {
        $this->reduction = $reduction;
    }

    function setTe($te) {
        $this->te = $te;
    }

    function setBrides($brides) {
        $this->brides = $brides;
    }

    function setVannes($vannes) {
        $this->vannes = $vannes;
    }

    function setEpaisseur($epaisseur) {
        $this->epaisseur = $epaisseur;
    }

    function setCouche1($couche1) {
        $this->couche1 = $couche1;
    }

    function setCouche2($couche2) {
        $this->couche2 = $couche2;
    }

    function setCouche3($couche3) {
        $this->couche3 = $couche3;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }


}
