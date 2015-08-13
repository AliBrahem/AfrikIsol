<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
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
     * @var integer
     *
     * @ORM\Column(name="Projet", type="integer", nullable=false)
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
     * @ORM\Column(name="DateDebut", type="date", nullable=true)
     */
    private $dateDebut;
    
    /**
     * @var date
     *
     * @ORM\Column(name="DateFin", type="date", nullable=true)
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

    function getIdprojet() {
        return $this->idprojet;
    }

    function setIdprojet($idprojet) {
        $this->idprojet = $idprojet;
    }


    
}
