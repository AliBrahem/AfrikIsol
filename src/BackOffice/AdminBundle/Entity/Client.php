<?php
namespace BackOffice\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Client")
 */
class Client {
   
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", nullable=false)
     */
    protected $societe;
    
    /**
     * @var string
     *
     * @ORM\Column(name="SecteurActivite", type="string", nullable=true)
     */
    protected $secteurActivite;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="MatriculeFiscale", type="integer", nullable=true)
     */
    private $matricule;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Telephone", type="integer", nullable=true)
     */
    private $telephone;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Telecopie", type="integer", nullable=true)
     */
    private $telecopie;
    
    /**
     * @var string
     *
     * @ORM\Column(name="TitreContact", type="string", nullable=true)
     */
    private $titreContact;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Contact", type="integer", nullable=true)
     */
    private $contact;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    private $image;
    
    /**
     * @var string
     *
     * @ORM\Column(name="AdresseMail", type="string", nullable=true)
     */
    private $mail;
    function getId() {
        return $this->id;
    }

    function getSociete() {
        return $this->societe;
    }

    function getSecteurActivite() {
        return $this->secteurActivite;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getTelecopie() {
        return $this->telecopie;
    }

    function getTitreContact() {
        return $this->titreContact;
    }

    function getContact() {
        return $this->contact;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSociete($societe) {
        $this->societe = $societe;
    }

    function setSecteurActivite($secteurActivite) {
        $this->secteurActivite = $secteurActivite;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setTelecopie($telecopie) {
        $this->telecopie = $telecopie;
    }

    function setTitreContact($titreContact) {
        $this->titreContact = $titreContact;
    }

    function setContact($contact) {
        $this->contact = $contact;
    }

    function getMatricule() {
        return $this->matricule;
    }

    function getImage() {
        return $this->image;
    }

    function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    function setImage($image) {
        $this->image = $image;
    }
    function getMail() {
        return $this->mail;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

        
     public function __toString()
{
    return "".$this->societe;
}
    
}
