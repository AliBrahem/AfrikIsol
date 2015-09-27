<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MAD
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
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Projet", referencedColumnName="id")
     * })
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
     * @ORM\Column(name="Coude", type="integer", nullable=true)
     */
    private $coude;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Tuyauterie", type="integer", nullable=true)
     */
    private $tuyauterie;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Surface", type="integer", nullable=true)
     */
    private $surface;
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
     * @var string
     *
     * @ORM\Column(name="Couche4", type="string", nullable=true)
     */
    protected $couche4;
    /**
     * @var string
     *
     * @ORM\Column(name="Couche5", type="string", nullable=true)
     */
    protected $couche5;
    
    /**
     * @var float
     *
     * @ORM\Column(name="Quantite", type="float", nullable=false)
     */
    private $quantite;
    
    function getId() {
        return $this->id;
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

    function getCoude() {
        return $this->coude;
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

     /**
     * Set idevent
     *
     * @param \BackOffice\AdminBundle\Entity\Projet $idprojet
     * @return Avancement
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

    function setCoude($coude) {
        $this->coude = $coude;
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
    
    function getTuyauterie() {
        return $this->tuyauterie;
    }

    function getCouche4() {
        return $this->couche4;
    }

    function getCouche5() {
        return $this->couche5;
    }

    function setTuyauterie($tuyauterie) {
        $this->tuyauterie = $tuyauterie;
    }

    function setCouche4($couche4) {
        $this->couche4 = $couche4;
    }

    function setCouche5($couche5) {
        $this->couche5 = $couche5;
    }
    function getSurface() {
        return $this->surface;
    }

    function setSurface($surface) {
        $this->surface = $surface;
    }


    


}
