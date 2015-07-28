<?php
namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="Projet")
 * @ORM\Entity
 */
class Projet {
    
  
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;   
    
    /**
     * @var string
     *
     * @ORM\Column(name="Nature", type="string", length=255, nullable=false)
     */
    private $nature;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Lieu", type="string", length=255, nullable=true)
     */
    private $lieu;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="idClient", type="integer", nullable=true)
     */
    private $idClient;
    
    /**
     * @var float
     *
     * @ORM\Column(name="BesoinEchaffaudage", type="float", nullable=true)
     */
    private $besoinEchaffaudage;
    
    /**
     * @var float
     *
     * @ORM\Column(name="BesoinHebergement", type="float", nullable=true)
     */
    private $besoinHebergement;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbBesoinHebergement", type="integer", nullable=true)
     */
    private $nbBesoinHebergement;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbJourPrefa", type="integer", nullable=true)
     */
    private $nbJourPrefa;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbJourMonta", type="integer", nullable=true)
     */
    private $nbJourMonta;
    
    /**
     * @var date
     *
     * @ORM\Column(name="DatePrefa", type="date", nullable=true)
     */
    private $datePrefa;
    
    /**
     * @var date
     *
     * @ORM\Column(name="DateMonta", type="date", nullable=true)
     */
    private $dateMonta;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbPersPrefa", type="integer", nullable=true)
     */
    private $nbPersPrefa;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbPersMonta", type="integer", nullable=true)
     */
    private $nbPersMonta;
    
    
    /**
     * @var float
     *
     * @ORM\Column(name="MargeBenef", type="float", nullable=true)
     */
    private $margebenef;
    
    /**
     * @var float
     *
     * @ORM\Column(name="Remise", type="float", nullable=true)
     */
    private $Remise;
    
    /**
     * @var float
     *
     * @ORM\Column(name="BesoinMaterielRoulant", type="float", nullable=true)
     */
    private $besoinMaterielRoulant;
    
    /**
     * @var float
     *
     * @ORM\Column(name="BesoinMatierePremiere", type="float", nullable=true)
     */
    private $besoinMatierePremiere;
    
    /**
     * @var float
     *
     * @ORM\Column(name="coutEPI", type="float", nullable=true)
     */
    private $coutEPI;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteEPI", type="integer", nullable=true)
     */
    private $quantiteEPI;
    
     /**
     * @var string
     *
     * @ORM\Column(name="Contact", type="string", length=255, nullable=true)
     */
    private $contact;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=255, nullable=true)
     */
    private $etat;
    
    /**
     * @var date
     *
     * @ORM\Column(name="DateMiseDisposition", type="date", nullable=true)
     */
    private $dateMiseDispo;
    
    /**
     * @var float
     *
     * @ORM\Column(name="PrixUnitaire", type="float", nullable=true)
     */
    private $prixUnitaire;
    
    /**
     * @var float
     *
     * @ORM\Column(name="PrixTotal", type="float", nullable=true)
     */
    private $prixTotal;
    
    /**
     * @var float
     *
     * @ORM\Column(name="Charges", type="float", nullable=true)
     */
    private $charges;
    
    function getId() {
        return $this->id;
    }

    function getNature() {
        return $this->nature;
    }

    function getLieu() {
        return $this->lieu;
    }

    function getIdClient() {
        return $this->idClient;
    }

    function getBesoinEchaffaudage() {
        return $this->besoinEchaffaudage;
    }

    function getBesoinHebergement() {
        return $this->besoinHebergement;
    }

    function getNbBesoinHebergement() {
        return $this->nbBesoinHebergement;
    }

    function getNbJourPrefa() {
        return $this->nbJourPrefa;
    }

    function getNbJourMonta() {
        return $this->nbJourMonta;
    }

    function getDatePrefa() {
        return $this->datePrefa;
    }

    function getDateMonta() {
        return $this->dateMonta;
    }

    function getNbPersPrefa() {
        return $this->nbPersPrefa;
    }

    function getNbPersMonta() {
        return $this->nbPersMonta;
    }

    function getMargebenef() {
        return $this->margebenef;
    }

    function getRemise() {
        return $this->Remise;
    }

    function getBesoinMaterielRoulant() {
        return $this->besoinMaterielRoulant;
    }

    function getBesoinMatierePremiere() {
        return $this->besoinMatierePremiere;
    }

    function getCoutEPI() {
        return $this->coutEPI;
    }

    function getQuantiteEPI() {
        return $this->quantiteEPI;
    }

    function getContact() {
        return $this->contact;
    }

    function getEtat() {
        return $this->etat;
    }

    function getDateMiseDispo() {
        return $this->dateMiseDispo;
    }

    function getPrixUnitaire() {
        return $this->prixUnitaire;
    }

    function getPrixTotal() {
        return $this->prixTotal;
    }

    function getCharges() {
        return $this->charges;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNature($nature) {
        $this->nature = $nature;
    }

    function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    function setBesoinEchaffaudage($besoinEchaffaudage) {
        $this->besoinEchaffaudage = $besoinEchaffaudage;
    }

    function setBesoinHebergement($besoinHebergement) {
        $this->besoinHebergement = $besoinHebergement;
    }

    function setNbBesoinHebergement($nbBesoinHebergement) {
        $this->nbBesoinHebergement = $nbBesoinHebergement;
    }

    function setNbJourPrefa($nbJourPrefa) {
        $this->nbJourPrefa = $nbJourPrefa;
    }

    function setNbJourMonta($nbJourMonta) {
        $this->nbJourMonta = $nbJourMonta;
    }

    function setDatePrefa(\DateTime $datePrefa) {
        $this->datePrefa = $datePrefa;
    }

    function setDateMonta(\DateTime $dateMonta) {
        $this->dateMonta = $dateMonta;
    }

    function setNbPersPrefa($nbPersPrefa) {
        $this->nbPersPrefa = $nbPersPrefa;
    }

    function setNbPersMonta($nbPersMonta) {
        $this->nbPersMonta = $nbPersMonta;
    }

    function setMargebenef($margebenef) {
        $this->margebenef = $margebenef;
    }

    function setRemise($Remise) {
        $this->Remise = $Remise;
    }

    function setBesoinMaterielRoulant($besoinMaterielRoulant) {
        $this->besoinMaterielRoulant = $besoinMaterielRoulant;
    }

    function setBesoinMatierePremiere($besoinMatierePremiere) {
        $this->besoinMatierePremiere = $besoinMatierePremiere;
    }

    function setCoutEPI($coutEPI) {
        $this->coutEPI = $coutEPI;
    }

    function setQuantiteEPI($quantiteEPI) {
        $this->quantiteEPI = $quantiteEPI;
    }

    function setContact($contact) {
        $this->contact = $contact;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setDateMiseDispo(\DateTime $dateMiseDispo ) {
        $this->dateMiseDispo = $dateMiseDispo;
    }

    function setPrixUnitaire($prixUnitaire) {
        $this->prixUnitaire = $prixUnitaire;
    }

    function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;
    }

    function setCharges($charges) {
        $this->charges = $charges;
    }


}
