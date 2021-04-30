<<<<<<< HEAD
<?php 
 
namespace  App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Demo {
/**
 * @ORM\Id
 * @ORMGeneratedValue()
 * @ORM\Column(type="integer")
 */
private $id;
/**
 * @ORM\Column(type="string" , length=255)
 */
private $titre;
/**
 * @ORM\Column(type="string" , length=1048)
 */
private $contenu;

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

/**
 * Get the value of titre
 */ 
public function getTitre()
{
return $this->titre;
}

/**
 * Set the value of titre
 *
 * @return  self
 */ 
public function setTitre($titre)
{
$this->titre = $titre;

return $this;
}

/**
 * Get the value of contenu
 */ 
public function getContenu()
{
return $this->contenu;
}

/**
 * Set the value of contenu
 *
 * @return  self
 */ 
public function setContenu($contenu)
{
$this->contenu = $contenu;

return $this;
}
=======
<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Demo 
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=1048)
     */
    private $contenu;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }
>>>>>>> 1dc0454e9196eb32dde15d80b214e31a97d85273
}