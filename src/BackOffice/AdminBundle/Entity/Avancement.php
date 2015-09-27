<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Avancement")
 */
class Avancement {
   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Projet", referencedColumnName="id")
     * })
     */
    protected $idprojet;
    
    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ChargePrefaHeures", type="integer", nullable=false)
     */
    protected $chargePrefaHr;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ChargePrefaHommes", type="integer", nullable=false)
     */
    protected $chargePrefaHommes;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ChargePrevMontaHeures", type="integer", nullable=false)
     */
    protected $chargePrevMontaHr;
    /**
     * @var integer
     *
     * @ORM\Column(name="ChargePrevMontaHommes", type="integer", nullable=false)
     */
    protected $chargePrevMontaHommes;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ChargeReelleMontaHeures", type="integer", nullable=false)
     */
    protected $chargeReelleMontaHr;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ChargeReelleMontaHommes", type="integer", nullable=false)
     */
    protected $chargeReelleMontaHomme;
    /**
     * @var \Tole
     *
     * @ORM\ManyToOne(targetEntity="Tole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tole", referencedColumnName="id")
     * })
     */
    protected $isolant;
    /**
     * @var float
     *
     * @ORM\Column(name="Quantite", type="float", nullable=false)
     */
    private $quantite;
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getChargePrefaHr() {
        return $this->chargePrefaHr;
    }

    function getChargePrefaHommes() {
        return $this->chargePrefaHommes;
    }

    function getChargePrevMontaHr() {
        return $this->chargePrevMontaHr;
    }

    function getChargePrevMontaHommes() {
        return $this->chargePrevMontaHommes;
    }

    function getChargeReelleMontaHr() {
        return $this->chargeReelleMontaHr;
    }

    function getChargeReelleMontaHomme() {
        return $this->chargeReelleMontaHomme;
    }

 

    function getQuantite() {
        return $this->quantite;
    }

    function setId($id) {
        $this->id = $id;
    }

    /**
     * Set idprojet
     *
     * @param \BackOffice\AdminBundle\Entity\Projet $idprojet
     * @return Projet
     */
    public function setIdprojet(\BackOffice\AdminBundle\Entity\Projet $idprojet = null)
    {
        $this->idprojet = $idprojet;
    
        return $this;
    }

    /**
     * Get idprojet
     *
     * @return \BackOffice\AdminBundle\Entity\Projet 
     */
    public function getIdprojet()
    {
        return $this->idprojet;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setChargePrefaHr($chargePrefaHr) {
        $this->chargePrefaHr = $chargePrefaHr;
    }

    function setChargePrefaHommes($chargePrefaHommes) {
        $this->chargePrefaHommes = $chargePrefaHommes;
    }

    function setChargePrevMontaHr($chargePrevMontaHr) {
        $this->chargePrevMontaHr = $chargePrevMontaHr;
    }

    function setChargePrevMontaHommes($chargePrevMontaHommes) {
        $this->chargePrevMontaHommes = $chargePrevMontaHommes;
    }

    function setChargeReelleMontaHr($chargeReelleMontaHr) {
        $this->chargeReelleMontaHr = $chargeReelleMontaHr;
    }

    function setChargeReelleMontaHomme($chargeReelleMontaHomme) {
        $this->chargeReelleMontaHomme = $chargeReelleMontaHomme;
    }

   

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

     /**
     * Set isolant
     *
     * @param \BackOffice\AdminBundle\Entity\Tole $isolant
     * @return Tole
     */
    public function setIsolant(\BackOffice\AdminBundle\Entity\Tole $isolant = null)
    {
        $this->isolant = $isolant;
    
        return $this;
    }

    /**
     * Get isolant
     *
     * @return \BackOffice\AdminBundle\Entity\Tole
     */
    public function getIsolant()
    {
        return $this->isolant;
    }

    
}
