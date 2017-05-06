<?php



namespace PizzaBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="appetizer")
 */
class Appetizer {
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
     * @ORM\Column(type="string", length=500)
     */
    private $quantity;
    
    
    /**
     * @ORM\Column(type="integer")
     */
    private $price;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function getPrice() {
        return $this->price;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    function setPrice($price) {
        $this->price = $price;
    }


}
