<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/27/2017
 * Time: 4:48 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="Repository\TicketRepository")
 * @ORM\Table(name="annonce")
 */
class Annonce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $nom;
    /**
     * @ORM\Column(type="boolean")
     */
    private $status ;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     *@ORM\JoinColumn()
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur")
     */
    private $Utilisateur;

    /**
     * @ORM\JoinColumn()
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Voiture",cascade={"persist" , "remove"})
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $Voiture;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $Prix;
    /**
     * @ORM\Column(type="date")
     */
    private $DateAjoutAnnonce;

    /**
     * @return DateType
     */
    public function getDateAjoutAnnonce()
    {
        return $this->DateAjoutAnnonce;
    }

    /**
     * @param mixed $DateAjoutAnnonce
     */
    public function setDateAjoutAnnonce($DateAjoutAnnonce)
    {
        $this->DateAjoutAnnonce = $DateAjoutAnnonce;
    }

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
     * @return Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    /**
     * @param mixed $Utilisateur
     */
    public function setUtilisateur($Utilisateur)
    {
        $this->Utilisateur = $Utilisateur;
    }

    /**
     * @return Voiture
     */
    public function getVoiture()
    {
        return $this->Voiture;
    }

    /**
     * @param mixed $Voiture
     */
    public function setVoiture($Voiture)
    {
        $this->Voiture = $Voiture;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->Prix;
    }

    /**
     * @param mixed $Prix
     */
    public function setPrix($Prix)
    {
        $this->Prix = $Prix;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
}