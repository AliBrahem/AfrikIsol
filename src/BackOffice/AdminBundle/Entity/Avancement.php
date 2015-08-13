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
     * @var integer
     *
     * @ORM\Column(name="Projet", type="integer", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="Isolant", type="string", nullable=false)
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

    function getIdprojet() {
        return $this->idprojet;
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

    function getIsolant() {
        return $this->isolant;
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

    function setIsolant($isolant) {
        $this->isolant = $isolant;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }



    
}
