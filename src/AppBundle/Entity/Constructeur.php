<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 4/19/2017
 * Time: 6:45 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\Constructor")
 * @ORM\Table(name="constructeur")
 */
class Constructeur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private  $id;

    /**
     * @ORM\Column(type="string")
     */private $Nom;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    function __toString()
    {
        return $this->Nom;
    }


}