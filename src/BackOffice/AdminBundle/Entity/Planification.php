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
     * @var date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    
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

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }


}
