<?php


namespace PizzaBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="orderBase")
 */
class Order {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name; 
    
    /**
     * @ORM\Column(type="integer")
     */
    private $phone;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string")
     */
    private $message;
    
    /**
     * @ORM\Column(type="string", nullable = true)
     */
    private $status;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function getMessage() {
        return $this->message;
    }

    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }

        
    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMessage($message) {
        $this->message = $message;
    }


    
}
