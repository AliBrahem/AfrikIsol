<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="Stock")
 * @ORM\Entity
 */
class Stock {
    
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
     * @ORM\Column(name="Designation", type="string", length=255, nullable=false)
     */
    private $designation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Unité", type="string", length=255, nullable=false)
     */
    private $unite;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Nature", type="string", length=255, nullable=false)
     */
    private $nature;
    
    /**
     * @var string
     *
     * @ORM\Column(name="QuantiteStock", type="integer", nullable=false)
     */
    private $qteStock;
    
    function getId() {
        return $this->id;
    }

    function getDesignation() {
        return $this->designation;
    }

    function getUnite() {
        return $this->unite;
    }



    function getQteStock() {
        return $this->qteStock;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDesignation($designation) {
        $this->designation = $designation;
    }

    function setUnite($unite) {
        $this->unite = $unite;
    }

    function setQteStock($qteStock) {
        $this->qteStock = $qteStock;
    }

    public function __toString()
{
    return "".$this->designation;
}

    
function getNature() {
    return $this->nature;
}

function setNature($nature) {
    $this->nature = $nature;
}



    
}