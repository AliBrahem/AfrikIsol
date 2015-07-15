<?php
namespace BackOffice\AdminBundle\Entity;

//use Doctrine\ORM\Mapping as ORM;

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
    
    
}
