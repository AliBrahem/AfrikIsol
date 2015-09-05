<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuyauteries
 *
 * @ORM\Table(name="Surface")
 * @ORM\Entity
 */
class Surface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Projet", type="integer", nullable=false)
     */
    protected $idprojet;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DiametreInter", type="integer", nullable=false)
     */
    private $diametreinter;

    /**
     * @var integer
     *
     * @ORM\Column(name="DNext", type="integer", nullable=false)
     */
    private $dnext;

    /**
     * @var integer
     *
     * @ORM\Column(name="Epaisseur", type="integer", nullable=false)
     */
    private $epaisseur;

    /**
     * @var integer
     *
     * @ORM\Column(name="DNisole", type="integer", nullable=false)
     */
    private $dnisole;

    /**
     * @var float
     *
     * @ORM\Column(name="CIRC", type="float", nullable=false)
     */
    private $circ;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recouv", type="integer", nullable=false)
     */
    private $recouv;

    /**
     * @var float
     *
     * @ORM\Column(name="LargeurTole", type="float", nullable=false)
     */
    private $largeurtole;

    /**
     * @var float
     *
     * @ORM\Column(name="Quantite", type="float", nullable=false)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="Dechet", type="float", nullable=false)
     */
    private $dechet;

    /**
     * @var float
     *
     * @ORM\Column(name="QteBrute", type="float", nullable=false)
     */
    private $qtebrute;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempsPrefa", type="float", nullable=false)
     */
    private $tempsprefa;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="tempsMonta", type="float", nullable=false)
     */
    private $tempsMonta;
    
    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaireTole", type="float", nullable=false)
     */
    private $prixUnitaireTole;
    
    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaireIsolant", type="float", nullable=false)
     */
    private $prixUnitaireIsolant;
    
    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float", nullable=false)
     */
    private $prix;
    
    /**
     * @var float
     *
     * @ORM\Column(name="PrixMainO", type="float", nullable=false)
     */
    private $prixMO;
    
    /**
     * @var float
     *
     * @ORM\Column(name="Accessoires", type="float", nullable=true)
     */
    private $accessoires;
    
    function getId() {
        return $this->id;
    }

    function getDiametreinter() {
        return $this->diametreinter;
    }

    function getDnext() {
        return $this->dnext;
    }

    function getEpaisseur() {
        return $this->epaisseur;
    }

    function getDnisole() {
        return $this->dnisole;
    }

    function getCirc() {
        return $this->circ;
    }

    function getRecouv() {
        return $this->recouv;
    }

    function getLargeurtole() {
        return $this->largeurtole;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function getDechet() {
        return $this->dechet;
    }

    function getQtebrute() {
        return $this->qtebrute;
    }

    function getTempsprefa() {
        return $this->tempsprefa;
    }

    function getTempsMonta() {
        return $this->tempsMonta;
    }

    function getPrixUnitaireTole() {
        return $this->prixUnitaireTole;
    }

    function getPrixUnitaireIsolant() {
        return $this->prixUnitaireIsolant;
    }

    function getPrix() {
        return $this->prix;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDiametreinter($diametreinter) {
        $this->diametreinter = $diametreinter;
    }

    function setDnext($dnext) {
        $this->dnext = $dnext;
    }

    function setEpaisseur($epaisseur) {
        $this->epaisseur = $epaisseur;
    }

    function setDnisole($dnisole) {
        $this->dnisole = $dnisole;
    }

    function setCirc($circ) {
        $this->circ = $circ;
    }

    function setRecouv($recouv) {
        $this->recouv = $recouv;
    }

    function setLargeurtole($largeurtole) {
        $this->largeurtole = $largeurtole;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    function setDechet($dechet) {
        $this->dechet = $dechet;
    }

    function setQtebrute($qtebrute) {
        $this->qtebrute = $qtebrute;
    }

    function setTempsprefa($tempsprefa) {
        $this->tempsprefa = $tempsprefa;
    }

    function setTempsMonta($tempsMonta) {
        $this->tempsMonta = $tempsMonta;
    }

    function setPrixUnitaireTole($prixUnitaireTole) {
        $this->prixUnitaireTole = $prixUnitaireTole;
    }

    function setPrixUnitaireIsolant($prixUnitaireIsolant) {
        $this->prixUnitaireIsolant = $prixUnitaireIsolant;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }


    function getIdprojet() {
        return $this->idprojet;
    }

    function setIdprojet($idprojet) {
        $this->idprojet = $idprojet;
    }

    
    function getPrixMO() {
        return $this->prixMO;
    }

    function setPrixMO($prixMO) {
        $this->prixMO = $prixMO;
    }

    function getAccessoires() {
        return $this->accessoires;
    }

    function setAccessoires($accessoires) {
        $this->accessoires = $accessoires;
    }


}
