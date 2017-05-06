<?php

namespace PizzaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="menu")
 */
class Menu {
    
    
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
    private $components;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $smallPizza;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $middlePizza;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $largPizza;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $xxlPizza;
    

    function __construct() {
        
    }

        /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Menu
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set components
     *
     * @param string $components
     *
     * @return Menu
     */
    public function setComponents($components)
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Get components
     *
     * @return string
     */
    public function getComponents()
    {
        return $this->components;
    }

    function getSmallPizza() {
        return $this->smallPizza;
    }

    function getMiddlePizza() {
        return $this->middlePizza;
    }

    function getLargPizza() {
        return $this->largPizza;
    }

    function getXxlPizza() {
        return $this->xxlPizza;
    }

    function setSmallPizza($smallPizza) {
        $this->smallPizza = $smallPizza;
    }

    function setMiddlePizza($middlePizza) {
        $this->middlePizza = $middlePizza;
    }

    function setLargPizza($largPizza) {
        $this->largPizza = $largPizza;
    }

    function setXxlPizza($xxlPizza) {
        $this->xxlPizza = $xxlPizza;
    }

       
    
   
}
