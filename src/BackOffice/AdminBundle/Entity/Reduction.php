<?php

namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reduction
 *
 * @ORM\Table(name="reduction")
 * @ORM\Entity
 */
class Reduction
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
     * @var integer
     *
     * @ORM\Column(name="DiametreInter", type="integer", nullable=false)
     */
    private $diametreinter;

    /**
     * @var integer
     *
     * @ORM\Column(name="DNext", type="integer", nullable=false)
     */
    private $dnext;

    /**
     * @var integer
     *
     * @ORM\Column(name="Epaisseur", type="integer", nullable=false)
     */
    private $epaisseur;

    /**
     * @var integer
     *
     * @ORM\Column(name="DNisole", type="integer", nullable=false)
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
     * @ORM\Column(name="LargeurTole", type="float", nullable=false)
     */
    private $largeurtole;

    /**
     * @var float
     *
     * @ORM\Column(name="QteNet", type="float", nullable=false)
     */
    private $qtenet;

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
     * @var integer
     *
     * @ORM\Column(name="tempsPrefa", type="integer", nullable=false)
     */
    private $tempsprefa;

    function getId() {
        return $this->id;
    }

    function getDiametreinter() {
        return $this->diametreinter;
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

    function getLargeurtole() {
        return $this->largeurtole;
    }

    function getQtenet() {
        return $this->qtenet;
    }

    function getDechet() {
        return $this->dechet;
    }

    function getQtebrute() {
        return $this->qtebrute;
    }

    function getTempsprefa() {
        return $this->tempsprefa;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDiametreinter($diametreinter) {
        $this->diametreinter = $diametreinter;
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

    function setLargeurtole($largeurtole) {
        $this->largeurtole = $largeurtole;
    }

    function setQtenet($qtenet) {
        $this->qtenet = $qtenet;
    }

    function setDechet($dechet) {
        $this->dechet = $dechet;
    }

    function setQtebrute($qtebrute) {
        $this->qtebrute = $qtebrute;
    }

    function setTempsprefa($tempsprefa) {
        $this->tempsprefa = $tempsprefa;
    }


}
