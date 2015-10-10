<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gantt2
 *
 * @ORM\Table(name="Gantt2")
 * @ORM\Entity
 */
class Gantt2 {
    
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
     * @var integer
     *
     * @ORM\Column(name="JourDebut", type="integer", nullable=false)
     */
    private $jourDebut;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="JourFin", type="integer", nullable=false)
     */
    private $jourFin;
    
    
    function getId() {
        return $this->id;
    }

    function getItem() {
        return $this->item;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setItem($item) {
        $this->item = $item;
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

    function getJourDebut() {
        return $this->jourDebut;
    }

    function getJourFin() {
        return $this->jourFin;
    }

    function setJourDebut($jourDebut) {
        $this->jourDebut = $jourDebut;
    }

    function setJourFin($jourFin) {
        $this->jourFin = $jourFin;
    }


    
}
