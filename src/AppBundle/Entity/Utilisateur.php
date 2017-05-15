<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 2/24/2017
 * Time: 11:29 AM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Repository\UsersRepository")
 * @ORM\Table(name="utilisateur")
 * @UniqueEntity(fields={"mail", "Username"}, message="Ce champ doit être unique")
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", unique=true)
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $mail;
    /**
     * @ORM\Column(type="bigint")
     * @Assert\Range(
     * min = 0,
     * minMessage = "un nombre de teléphone ne peu pas négative",
     * )
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $numTel;
    /**
     * @ORM\Column(type="date",nullable=true)
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $dateNaissance;
    /**
     * @ORM\Column(type="string",nullable=true)
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $adresse;
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $codePostal;
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $ville;
    /**
     * @ORM\Column(type="string" ,  nullable=true)
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $pays;
    /**
     * @ORM\Column(type="string",nullable=true)
     *
     */
    private $divulgation;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $ipCourante;
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Image()
     */
    private $photo;
    /**
     * @ORM\Column(type="array")
     */
    private $historique;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $Username;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(groups={"Registration"})
     */
    private $Password;


    private $plainpassword;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Voiture", mappedBy="Utilisateur")
     * @ORM\JoinColumn(nullable= true)
     */
    private $Voitures;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles=['ROLE_USER'];

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\FicheTech", mappedBy="Utilisateur")
     */
    private $ficheTech;

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


    /**
     * @ORM\Column(type="text")
     */
    private $token;

    /**
     * @return mixed
     */
    public function getFicheTech()
    {
        return $this->ficheTech;
    }

    /**
     * @param mixed $ficheTech
     */
    public function setFicheTech($ficheTech)
    {
        $this->ficheTech = $ficheTech;
    }


    /**
     * @return mixed
     */
    public function getVoitures()
    {
        return $this->Voitures;
    }

    /**
     * @param mixed $Voitures
     */
    public function setVoitures($Voitures)
    {
        $this->Voitures = $Voitures;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param mixed $Username
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
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

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param mixed $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getDivulgation()
    {
        return $this->divulgation;
    }

    /**
     * @param mixed $divulgation
     */
    public function setDivulgation($divulgation)
    {
        $this->divulgation = $divulgation;
    }

    /**
     * @return mixed
     */
    public function getIpCourante()
    {
        return $this->ipCourante;
    }

    /**
     * @param mixed $ipCourante
     */
    public function setIpCourante($ipCourante)
    {
        $this->ipCourante = $ipCourante;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * @param mixed $historique
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;
    }

    /**
     * @return mixed
     */
    public function getPlainpassword()
    {

        return $this->plainpassword;
    }

    public function setPlainpassword($plainpassword)
    {
        $this->plainpassword = $plainpassword;
        $this->setPassword(null);
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->nom;
    }

    public function getRoles()
    {
        return $this->roles;

    }

    public function getSalt()
    {

    }

    public function eraseCredentials()
    {
        $this->plainpassword =null;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
}