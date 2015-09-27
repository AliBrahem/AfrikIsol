<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planification
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
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Projet", referencedColumnName="id")
     * })
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

  

    function getDate() {
        return $this->date;
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
     * @return Planification
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

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }


}
