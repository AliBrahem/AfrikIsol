<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Planification")
 */
class Planification {
   
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
     * @var integer
     *
     * @ORM\Column(name="PreavisAttribution", type="integer", nullable=true)
     */
    protected $preavis;
    
    /**
     * @var date
     *
     * @ORM\Column(name="AvisKickoffMeeting", type="date", nullable=true)
     */
    private $avisKickoff;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="RetraitTolePrefa", type="integer", nullable=true)
     */
    protected $retraitTole;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="RetraitPlanPriorités", type="integer", nullable=true)
     */
    protected $retraitPlan;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DebutInstallationSite", type="integer", nullable=true)
     */
    protected $debutInstallation;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DebutPrefa", type="integer", nullable=true)
     */
    protected $debutPrefa;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DebutMonta", type="integer", nullable=true)
     */
    protected $debutMonta;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="LivraisonPremiereCommandePrefa", type="integer", nullable=true)
     */
    protected $livraisonCommandePrefa;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DebutMontagePremièresEquipes", type="integer", nullable=true)
     */
    protected $debutMontagePremierGroupe;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DebutMontageDeuxiemesEquipes", type="integer", nullable=true)
     */
    protected $debutMontageDeuxiemeGroupe;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="DebutDemobilisation", type="integer", nullable=true)
     */
    protected $debutDemobilisation;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="FinDemobilisation", type="integer", nullable=true)
     */
    protected $finDemobilisation;
    
     /**
     * @var date
     *
     * @ORM\Column(name="dateFin", type="date", nullable=true)
     */
    private $dateFin;
    
    
    function getId() {
        return $this->id;
    }

    function getIdprojet() {
        return $this->idprojet;
    }

    function getPreavis() {
        return $this->preavis;
    }

    function getAvisKickoff() {
        return $this->avisKickoff;
    }

    function getRetraitTole() {
        return $this->retraitTole;
    }

    function getRetraitPlan() {
        return $this->retraitPlan;
    }

    function getDebutInstallation() {
        return $this->debutInstallation;
    }

    function getDebutPrefa() {
        return $this->debutPrefa;
    }

    function getDebutMonta() {
        return $this->debutMonta;
    }

    function getLivraisonCommandePrefa() {
        return $this->livraisonCommandePrefa;
    }

    function getDebutMontagePremierGroupe() {
        return $this->debutMontagePremierGroupe;
    }

    function getDebutMontageDeuxiemeGroupe() {
        return $this->debutMontageDeuxiemeGroupe;
    }

    function getDebutDemobilisation() {
        return $this->debutDemobilisation;
    }

    function getFinDemobilisation() {
        return $this->finDemobilisation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdprojet($idprojet) {
        $this->idprojet = $idprojet;
    }

    function setPreavis($preavis) {
        $this->preavis = $preavis;
    }

    function setAvisKickoff(\DateTime $avisKickoff) {
        $this->avisKickoff = $avisKickoff;
    }

    function setRetraitTole($retraitTole) {
        $this->retraitTole = $retraitTole;
    }

    function setRetraitPlan($retraitPlan) {
        $this->retraitPlan = $retraitPlan;
    }

    function setDebutInstallation($debutInstallation) {
        $this->debutInstallation = $debutInstallation;
    }

    function setDebutPrefa($debutPrefa) {
        $this->debutPrefa = $debutPrefa;
    }

    function setDebutMonta($debutMonta) {
        $this->debutMonta = $debutMonta;
    }

    function setLivraisonCommandePrefa($livraisonCommandePrefa) {
        $this->livraisonCommandePrefa = $livraisonCommandePrefa;
    }

    function setDebutMontagePremierGroupe($debutMontagePremierGroupe) {
        $this->debutMontagePremierGroupe = $debutMontagePremierGroupe;
    }

    function setDebutMontageDeuxiemeGroupe($debutMontageDeuxiemeGroupe) {
        $this->debutMontageDeuxiemeGroupe = $debutMontageDeuxiemeGroupe;
    }

    function setDebutDemobilisation($debutDemobilisation) {
        $this->debutDemobilisation = $debutDemobilisation;
    }

    function setFinDemobilisation($finDemobilisation) {
        $this->finDemobilisation = $finDemobilisation;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function setDateFin(\DateTime $dateFin) {
        $this->dateFin = $dateFin;
    }


    
}
