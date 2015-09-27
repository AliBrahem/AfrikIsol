<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tole
 *
 * @ORM\Table(name="Tole")
 * @ORM\Entity
 */
class Tole
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
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Projet", referencedColumnName="id")
     * })
     */
    protected $idprojet;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DiametreInter", type="integer", nullable=false)
     */
    private $diametreinter;
    
    /**
     * @var float
     *
     * @ORM\Column(name="PouceInter", type="float", nullable=false)
     */
    private $pouce;
    
    /**
     * @var float
     *
     * @ORM\Column(name="DNext", type="float", nullable=false)
     */
    private $dnext;

    /**
     * @var integer
     *
     * @ORM\Column(name="Epaisseur", type="integer", nullable=false)
     */
    private $epaisseur;

    /**
     * @var float
     *
     * @ORM\Column(name="DNisole", type="float", nullable=false)
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
     * @var float
     *
     * @ORM\Column(name="QteNet", type="float", nullable=false)
     */
    private $qtenet;

    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaireTole", type="float", nullable=false)
     */
    private $prixUnitaireTole;
    
    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaireIsolantParMm", type="float", nullable=false)
     */
    private $prixUnitaireIsolantMm;
    
    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaireIsolantParML", type="float", nullable=false)
     */
    private $prixUnitaireIsolantML;
    
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
    
    /**
     * @var float
     *
     * @ORM\Column(name="Echaffaudage", type="float", nullable=true)
     */
    private $echaffaudage;
    
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
     * @var integer
     *
     * @ORM\Column(name="tempsPrefaMonta", type="float", nullable=false)
     */
    private $tempsPrefaMonta;
    
    /**
     * @var string
     *
     * @ORM\Column(name="TypeIsolant", type="string", nullable=false)
     */
    protected $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Unite", type="string", nullable=false)
     */
    protected $unite;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="NombreCouche", type="integer", nullable=false)
     */
    private $nbCouche;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Etat", type="integer", nullable=false)
     */
    protected $etat;
    
    function getId() {
        return $this->id;
    }



    function getDiametreinter() {
        return $this->diametreinter;
    }

    function getPouce() {
        return $this->pouce;
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

    function getQuantite() {
        return $this->quantite;
    }

    function getDechet() {
        return $this->dechet;
    }

    function getQtebrute() {
        return $this->qtebrute;
    }

    function getPrixUnitaireTole() {
        return $this->prixUnitaireTole;
    }

    function getPrixUnitaireIsolantMm() {
        return $this->prixUnitaireIsolantMm;
    }

    function getPrixUnitaireIsolantML() {
        return $this->prixUnitaireIsolantML;
    }

    function getPrix() {
        return $this->prix;
    }

    function getPrixMO() {
        return $this->prixMO;
    }

    function getAccessoires() {
        return $this->accessoires;
    }

    function getEchaffaudage() {
        return $this->echaffaudage;
    }
    public function __toString()
{
    return "".$this->id;
}
    function getTempsprefa() {
        return $this->tempsprefa;
    }

    function getTempsMonta() {
        return $this->tempsMonta;
    }

    function getTempsPrefaMonta() {
        return $this->tempsPrefaMonta;
    }

    function getType() {
        return $this->type;
    }

    function getUnite() {
        return $this->unite;
    }

    function getNbCouche() {
        return $this->nbCouche;
    }

    function setId($id) {
        $this->id = $id;
    }

   

    function setDiametreinter($diametreinter) {
        $this->diametreinter = $diametreinter;
    }

    function setPouce($pouce) {
        $this->pouce = $pouce;
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

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    function setDechet($dechet) {
        $this->dechet = $dechet;
    }

    function setQtebrute($qtebrute) {
        $this->qtebrute = $qtebrute;
    }

    function setPrixUnitaireTole($prixUnitaireTole) {
        $this->prixUnitaireTole = $prixUnitaireTole;
    }

    function setPrixUnitaireIsolantMm($prixUnitaireIsolantMm) {
        $this->prixUnitaireIsolantMm = $prixUnitaireIsolantMm;
    }

    function setPrixUnitaireIsolantML($prixUnitaireIsolantML) {
        $this->prixUnitaireIsolantML = $prixUnitaireIsolantML;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setPrixMO($prixMO) {
        $this->prixMO = $prixMO;
    }

    function setAccessoires($accessoires) {
        $this->accessoires = $accessoires;
    }

    function setEchaffaudage($echaffaudage) {
        $this->echaffaudage = $echaffaudage;
    }

    function setTempsprefa($tempsprefa) {
        $this->tempsprefa = $tempsprefa;
    }

    function setTempsMonta($tempsMonta) {
        $this->tempsMonta = $tempsMonta;
    }

    function setTempsPrefaMonta($tempsPrefaMonta) {
        $this->tempsPrefaMonta = $tempsPrefaMonta;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setUnite($unite) {
        $this->unite = $unite;
    }

    function setNbCouche($nbCouche) {
        $this->nbCouche = $nbCouche;
    }

     /**
     * Set idevent
     *
     * @param \BackOffice\AdminBundle\Entity\Projet $idprojet
     * @return Tole
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

    function getQtenet() {
        return $this->qtenet;
    }

    function setQtenet($qtenet) {
        $this->qtenet = $qtenet;
    }

    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }




}
