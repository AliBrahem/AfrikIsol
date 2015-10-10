<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gantt
 *
 * @ORM\Table(name="Gantt")
 * @ORM\Entity
 */
class Gantt {
    
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
     * @var string
     *
     * @ORM\Column(name="Item", type="string", length=255, nullable=false)
     */
    private $item;
    /**
     * @var date
     *
     * @ORM\Column(name="DateDebut", type="date", nullable=false)
     */
    private $dateDebut;
    
    /**
     * @var date
     *
     * @ORM\Column(name="DateFin", type="date", nullable=false)
     */
    private $dateFin;
    
    
    function getId() {
        return $this->id;
    }

    function getItem() {
        return $this->item;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setItem($item) {
        $this->item = $item;
    }

    function setDateDebut(\DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin(\DateTime $dateFin) {
        $this->dateFin = $dateFin;
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


    
}
