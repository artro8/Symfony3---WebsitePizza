<?php

namespace PizzaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;
    
     /**
     * @ORM\Column(type="text")
     */
    private $phone;
    
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;
    
    
    function getId() {
        return $this->id;
    }

    function getAddress() {
        return $this->address;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
