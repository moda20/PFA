<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 2/24/2017
 * Time: 10:34 AM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\TechSheetRepository")
 * @ORM\Table(name="fiche_tech")
 */
class FicheTech
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

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
     * @ORM\Column(type="date",nullable=true)
     */
    private $dateCommerce;
    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $dateFinCommerce;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $revisionKm;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $garantie;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $maxRevision;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $longueur;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $longueurAvecRetroviseurs;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $hauteur;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $volumeMinMax;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $nombrePortes;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $nombrePlaces;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $poidVide;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $carburant;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $modeMoteur;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $positionMoteur;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $volumeCylindre;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $puissance;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $couple;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $puissanceFiscale;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $alimentation;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $nombreRapports;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $roueMotrice;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $vitesseMax;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $acceleration;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $consommationUrbaine100Km;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $consommationNomUrbaine100Km;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $consommationMixte;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $degagementCO2;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $taillePneue;
    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $roueSecours;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $typeFrein;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $direction;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $volumeResevoir;
    /**
     * @ORM\JoinColumn(nullable=true)
     * @ORM\OneToOne(targetEntity="Voiture", inversedBy="ficheTech")
     */
    private $Voiture;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur", inversedBy="ficheTech")
     *
     */
    private $Utilisateur;

    /**
     * @return mixed
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
     * @return mixed
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
    public function getDateCommerce()
    {
        return $this->dateCommerce;
    }

    /**
     * @param mixed $dateCommerce
     */
    public function setDateCommerce($dateCommerce)
    {
        $this->dateCommerce = $dateCommerce;
    }

    /**
     * @return mixed
     */
    public function getDateFinCommerce()
    {
        return $this->dateFinCommerce;
    }

    /**
     * @param mixed $dateFinCommerce
     */
    public function setDateFinCommerce($dateFinCommerce)
    {
        $this->dateFinCommerce = $dateFinCommerce;
    }

    /**
     * @return mixed
     */
    public function getRevisionKm()
    {
        return $this->revisionKm;
    }

    /**
     * @param mixed $revisionKm
     */
    public function setRevisionKm($revisionKm)
    {
        $this->revisionKm = $revisionKm;
    }

    /**
     * @return mixed
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * @param mixed $garantie
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;
    }

    /**
     * @return mixed
     */
    public function getMaxRevision()
    {
        return $this->maxRevision;
    }

    /**
     * @param mixed $maxRevision
     */
    public function setMaxRevision($maxRevision)
    {
        $this->maxRevision = $maxRevision;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLongueurAvecRetroviseurs()
    {
        return $this->longueurAvecRetroviseurs;
    }

    /**
     * @param mixed $longueurAvecRetroviseurs
     */
    public function setLongueurAvecRetroviseurs($longueurAvecRetroviseurs)
    {
        $this->longueurAvecRetroviseurs = $longueurAvecRetroviseurs;
    }

    /**
     * @return mixed
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * @param mixed $hauteur
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    /**
     * @return mixed
     */
    public function getVolumeMinMax()
    {
        return $this->volumeMinMax;
    }

    /**
     * @param mixed $volumeMinMax
     */
    public function setVolumeMinMax($volumeMinMax)
    {
        $this->volumeMinMax = $volumeMinMax;
    }

    /**
     * @return mixed
     */
    public function getNombrePortes()
    {
        return $this->nombrePortes;
    }

    /**
     * @param mixed $nombrePortes
     */
    public function setNombrePortes($nombrePortes)
    {
        $this->nombrePortes = $nombrePortes;
    }

    /**
     * @return mixed
     */
    public function getNombrePlaces()
    {
        return $this->nombrePlaces;
    }

    /**
     * @param mixed $nombrePlaces
     */
    public function setNombrePlaces($nombrePlaces)
    {
        $this->nombrePlaces = $nombrePlaces;
    }

    /**
     * @return mixed
     */
    public function getPoidVide()
    {
        return $this->poidVide;
    }

    /**
     * @param mixed $poidVide
     */
    public function setPoidVide($poidVide)
    {
        $this->poidVide = $poidVide;
    }

    /**
     * @return mixed
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;
    }

    /**
     * @return mixed
     */
    public function getModeMoteur()
    {
        return $this->modeMoteur;
    }

    /**
     * @param mixed $modeMoteur
     */
    public function setModeMoteur($modeMoteur)
    {
        $this->modeMoteur = $modeMoteur;
    }

    /**
     * @return mixed
     */
    public function getPositionMoteur()
    {
        return $this->positionMoteur;
    }

    /**
     * @param mixed $positionMoteur
     */
    public function setPositionMoteur($positionMoteur)
    {
        $this->positionMoteur = $positionMoteur;
    }

    /**
     * @return mixed
     */
    public function getVolumeCylindre()
    {
        return $this->volumeCylindre;
    }

    /**
     * @param mixed $volumeCylindre
     */
    public function setVolumeCylindre($volumeCylindre)
    {
        $this->volumeCylindre = $volumeCylindre;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * @return mixed
     */
    public function getCouple()
    {
        return $this->couple;
    }

    /**
     * @param mixed $couple
     */
    public function setCouple($couple)
    {
        $this->couple = $couple;
    }

    /**
     * @return mixed
     */
    public function getPuissanceFiscale()
    {
        return $this->puissanceFiscale;
    }

    /**
     * @param mixed $puissanceFiscale
     */
    public function setPuissanceFiscale($puissanceFiscale)
    {
        $this->puissanceFiscale = $puissanceFiscale;
    }

    /**
     * @return mixed
     */
    public function getAlimentation()
    {
        return $this->alimentation;
    }

    /**
     * @param mixed $alimentation
     */
    public function setAlimentation($alimentation)
    {
        $this->alimentation = $alimentation;
    }

    /**
     * @return mixed
     */
    public function getNombreRapports()
    {
        return $this->nombreRapports;
    }

    /**
     * @param mixed $nombreRapports
     */
    public function setNombreRapports($nombreRapports)
    {
        $this->nombreRapports = $nombreRapports;
    }

    /**
     * @return mixed
     */
    public function getRoueMotrice()
    {
        return $this->roueMotrice;
    }

    /**
     * @param mixed $roueMotrice
     */
    public function setRoueMotrice($roueMotrice)
    {
        $this->roueMotrice = $roueMotrice;
    }

    /**
     * @return mixed
     */
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    /**
     * @param mixed $vitesseMax
     */
    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
    }

    /**
     * @return mixed
     */
    public function getAcceleration()
    {
        return $this->acceleration;
    }

    /**
     * @param mixed $acceleration
     */
    public function setAcceleration($acceleration)
    {
        $this->acceleration = $acceleration;
    }

    /**
     * @return mixed
     */
    public function getConsommationUrbaine100Km()
    {
        return $this->consommationUrbaine100Km;
    }

    /**
     * @param mixed $consommationUrbaine100Km
     */
    public function setConsommationUrbaine100Km($consommationUrbaine100Km)
    {
        $this->consommationUrbaine100Km = $consommationUrbaine100Km;
    }

    /**
     * @return mixed
     */
    public function getConsommationNomUrbaine100Km()
    {
        return $this->consommationNomUrbaine100Km;
    }

    /**
     * @param mixed $consommationNomUrbaine100Km
     */
    public function setConsommationNomUrbaine100Km($consommationNomUrbaine100Km)
    {
        $this->consommationNomUrbaine100Km = $consommationNomUrbaine100Km;
    }

    /**
     * @return mixed
     */
    public function getConsommationMixte()
    {
        return $this->consommationMixte;
    }

    /**
     * @param mixed $consommationMixte
     */
    public function setConsommationMixte($consommationMixte)
    {
        $this->consommationMixte = $consommationMixte;
    }

    /**
     * @return mixed
     */
    public function getDegagementCO2()
    {
        return $this->degagementCO2;
    }

    /**
     * @param mixed $degagementCO2
     */
    public function setDegagementCO2($degagementCO2)
    {
        $this->degagementCO2 = $degagementCO2;
    }

    /**
     * @return mixed
     */
    public function getTaillePneue()
    {
        return $this->taillePneue;
    }

    /**
     * @param mixed $taillePneue
     */
    public function setTaillePneue($taillePneue)
    {
        $this->taillePneue = $taillePneue;
    }

    /**
     * @return mixed
     */
    public function getRoueSecours()
    {
        return $this->roueSecours;
    }

    /**
     * @param mixed $roueSecours
     */
    public function setRoueSecours($roueSecours)
    {
        $this->roueSecours = $roueSecours;
    }

    /**
     * @return mixed
     */
    public function getTypeFrein()
    {
        return $this->typeFrein;
    }

    /**
     * @param mixed $typeFrein
     */
    public function setTypeFrein($typeFrein)
    {
        $this->typeFrein = $typeFrein;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return mixed
     */
    public function getVolumeResevoir()
    {
        return $this->volumeResevoir;
    }

    /**
     * @param mixed $volumeResevoir
     */
    public function setVolumeResevoir($volumeResevoir)
    {
        $this->volumeResevoir = $volumeResevoir;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return " fiche N :".$this->id;
    }
}