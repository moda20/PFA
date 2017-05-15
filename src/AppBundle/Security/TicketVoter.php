<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/26/2017
 * Time: 9:51 PM
 */

namespace AppBundle\Security;


use AppBundle\Entity\Annonce;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Voiture;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class TicketVoter extends Voter
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
        if (!$subject instanceof Annonce) {
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

        $ticket =$subject;

        switch ($attribute){
            case self::EDIT: return $this->canEdit($ticket, $user);
        }


    }
    public function canEdit(Annonce $ticket, $user){
        if ($ticket instanceof Annonce){
            if($ticket->getUtilisateur()=== $user){
                return true;
            }
        }
        else{
            return false;
        }
        return false;
    }

}