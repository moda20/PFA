<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 2/24/2017
 * Time: 10:27 AM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Repository\CarRepository")
 * @ORM\Table(name="voiture")
 */
class Voiture
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Image()
     * @Assert\NotBlank(groups={"newCar"})
     */
    private $photo;
    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank(groups={"newCar"})
     */
    private $Disponibilite = true;

    /**
     * @ORM\Column(type="array")
     * @Assert\NotBlank(groups={"newCar"})
     */
    private $photos;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="date")
     * @Assert\NotBlank(groups={"newCar"})
     */
    private $dateAjout;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"newCar"})
     */
    private $nomVoiture;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"newCar"})
     */
    private $ModeleVoiture;

    /**
     * @ORM\JoinColumn(nullable=true)
     * @ORM\OneToOne(targetEntity="FicheTech", mappedBy="Voiture",cascade={"persist","remove","merge"})
     * @Assert\NotBlank(groups={"newCar"})
     */
    private $ficheTech;
    /**
     * @ORM\JoinColumn(nullable=true)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur",inversedBy="Voitures")
     */
    private $Utilisateur;

    /**
     * @ORM\JoinColumn(nullable=true)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Constructeur")
     */
    private $Constructeur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $argus;

    /**
     * @return mixed
     */
    public function getArgus()
    {
        return $this->argus;
    }

    /**
     * @param mixed $argus
     */
    public function setArgus($argus)
    {
        $this->argus = $argus;
    }

    /**
     * @return mixed
     */
    public function getNomVoiture()
    {
        return $this->nomVoiture;
    }

    /**
     * @param mixed $nomVoiture
     */
    public function setNomVoiture($nomVoiture)
    {
        $this->nomVoiture = $nomVoiture;
    }

    /**
     * @return Constructeur
     */
    public function getConstructeur()
    {
        return $this->Constructeur;
    }

    /**
     * @param mixed $Constructeur
     */
    public function setConstructeur($Constructeur)
    {
        $this->Constructeur = $Constructeur;
    }

    /**
     * @return mixed
     */
    public function getModeleVoiture()
    {
        return $this->ModeleVoiture;
    }

    /**
     * @param mixed $ModeleVoiture
     */
    public function setModeleVoiture($ModeleVoiture)
    {
        $this->ModeleVoiture = $ModeleVoiture;
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
     * @return FicheTech
     */
    public function getFicheTech()
    {
        return $this->ficheTech;
    }

    public function setFicheTech(ficheTech $ficheTech)
    {
        $this->ficheTech = $ficheTech;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->Disponibilite;
    }

    /**
     * @param mixed $Disponibilite
     */
    public function setDisponibilite($Disponibilite)
    {
        $this->Disponibilite = $Disponibilite;
    }


    /**
     * @return mixed
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param mixed $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * @param mixed $dateAjout
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    function __toString()
    {
        return $this->getNomVoiture();
    }

}