<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/26/2017
 * Time: 9:51 PM
 */

namespace AppBundle\Security;


use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Voiture;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class UserVoter extends Voter
{

    /**
     * Determines if the attribute and subject are supported by this voter.
     *
     * @param string $attribute An attribute
     * @param mixed $subject The subject to secure, e.g. an object the user wants to access or any other PHP type
     *
     * @return bool True if the attribute and subject are supported, false otherwise
     */
    const EDIT = 'ROLE_OWN';
    protected function supports($attribute, $subject)
    {
        if (!in_array($attribute, array( self::EDIT))) {
            return false;
        }
        if (!$subject instanceof Utilisateur) {
            return false;
        }

        return true;
    }



    /**
     * Perform a single access check operation on a given attribute, subject and token.
     * It is safe to assume that $attribute and $subject already passed the "supports()" method check.
     *
     * @param string $attribute
     * @param mixed $subject
     * @param TokenInterface $token
     *
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user =$token->getUser();

        if(!$user instanceof Utilisateur){
            return false;
        }

        $car =$subject;

        switch ($attribute){
            case self::EDIT: return $this->canEdit($car, $user);
        }


    }
    public function canEdit(Utilisateur $USER, $user){
        if ($USER instanceof Utilisateur){
            if($USER=== $user){
                return true;
            }
        }
        else{
            return false;
        }
        return false;
    }

}