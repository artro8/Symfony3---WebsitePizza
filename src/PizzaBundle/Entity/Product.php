<?php



namespace PizzaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;
    
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    
   
    
    /**
     * @ORM\Column(type="date")
     */
    private $dataStart;
    
    /**
     * @ORM\Column(type="date")
     */
    private $dataEnd;

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getDataStart() {
        return $this->dataStart;
    }

    function getDataEnd() {
        return $this->dataEnd;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDataStart($dataStart) {
        $this->dataStart = $dataStart;
    }

    function setDataEnd($dataEnd) {
        $this->dataEnd = $dataEnd;
    }


}
