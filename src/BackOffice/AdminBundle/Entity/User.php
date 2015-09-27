<?php
// src/BackOffice/AdminBundle/Entity/User.php

namespace BackOffice\AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    protected $image;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * Get image
     *
     * @return string
     */
    function getImage() {
        //$img = base64_encode(stream_get_contents());
        return $this->image;
    }
    /**
     * Set image
     *
     * @param string $image
     * @return User
     */
    function setImage($image) {
        $this->image = $image;
    }


}