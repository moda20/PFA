<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 2/24/2017
 * Time: 11:31 AM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Utilisateur;

/**
 * @ORM\Entity
 * @ORM\Table(name="administrateur")
 */
class Administrateur extends Utilisateur
{
    /**
     * @ORM\Column(type="boolean")
     */
    private $isAdmin;

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    public function getRoles()
    {
        return ['ROLE_ADMIN'];
    }

}