<?php


namespace PizzaBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="promotion")
 */
class Promotion {
    
    const SERVER_PATH_TO_IMAGE_FOLDER = '/server/path/to/images';

    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;
    
    /**
     * @ORM\Column(type="string")
     */
    private $description;
       
    
    
    
    private $image;
    
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

    function getImage() {
        return $this->image;
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
    
    function setImage($image) {
        $this->image = $image;
    }

    function setDataStart($dataStart) {
        $this->dataStart = $dataStart;
    }

    function setDataEnd($dataEnd) {
        $this->dataEnd = $dataEnd;
    }
    
   public function getAbsolutePath()
  {
      return null === $this->imageName ? null : $this->getUploadRootDir().'/'.$this->imageName;
  }

  public function getWebPath()
  {
    return null === $this->imageName ? null : $this->getUploadDir().'/'.$this->imageName;
  }

  protected function getUploadRootDir($basepath)
  {
    // the absolute directory path where uploaded documents should be saved
    return $basepath.$this->getUploadDir();
  }

  protected function getUploadDir()
  {
    // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
    return 'uploads/products';
  }

  public function upload($basepath)
  {
   
    if (null === $this->file) {
        return;
    }

    if (null === $basepath) {
        return;
    }

    $this->file->move($this->getUploadRootDir($basepath), $this->file->getClientOriginalName());

    
    $this->setImageName($this->file->getClientOriginalName());

    
    $this->file = null;
  }
    
    
    
     
}
