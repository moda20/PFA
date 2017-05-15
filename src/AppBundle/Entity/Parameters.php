<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 4/24/2017
 * Time: 3:06 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Repository\ParamRepository")
 * @ORM\Table(name="parameters")
 */
class Parameters
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isValidationOn = true;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isMessageOn = true;
    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $Notifications = [];
    /**
     * @ORM\Column(type="boolean")
     */
    private $isSignupOn = true;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $argusparams =[];

    /**
     * @return mixed
     */
    public function getArgusparams()
    {
        return $this->argusparams;
    }

    /**
     * @param mixed $argusparams
     */
    public function setArgusparams($argusparams)
    {
        $this->argusparams = $argusparams;
    }

    /**
     * @return mixed
     */
    public function getIsSignupOn()
    {
        return $this->isSignupOn;
    }

    /**
     * @param mixed $isSignupOn
     */
    public function setIsSignupOn($isSignupOn)
    {
        $this->isSignupOn = $isSignupOn;
    }

    /**
     * @return String[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }

    /**
     * @param mixed $Notifications
     */
    public function setNotifications($Notifications)
    {
        $this->Notifications = $Notifications;
    }

    /**
     * @return mixed
     */
    public function getIsMessageOn()
    {
        return $this->isMessageOn;
    }

    /**
     * @param mixed $isMessageOn
     */
    public function setIsMessageOn($isMessageOn)
    {
        $this->isMessageOn = $isMessageOn;
    }

    /**
     * @return mixed
     */
    public function getIsValidationOn()
    {
        return $this->isValidationOn;
    }

    /**
     * @param mixed $isValidationOn
     */
    public function setIsValidationOn($isValidationOn)
    {
        $this->isValidationOn = $isValidationOn;
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


}