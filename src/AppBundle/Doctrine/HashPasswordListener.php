<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/23/2017
 * Time: 1:16 PM
 */

namespace AppBundle\Doctrine;


use AppBundle\Entity\Utilisateur;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class HashPasswordListener implements EventSubscriber
{


    private $passwordEncoder;

    public function __construct(UserPasswordEncoder $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function prePersist(LifecycleEventArgs $args){
        $entity =$args->getEntity();

        if(!$entity instanceof Utilisateur){
            return;
        }

        if ($entity->getPassword()!=null){
            $encoded =$this->passwordEncoder->encodePassword($entity, $entity->getPassword());
            $entity->setPassword($encoded);
        }


    }

    public function preUpdate(LifecycleEventArgs $args){
        $entity =$args->getEntity();

        if(!$entity instanceof Utilisateur ){
            return;
        }

        // SO THAT DOCTRINE UNDERSTANDS THINGS CHANGED
        $em = $args->getEntityManager();
        $meta = $em->getClassMetadata(get_class($entity));
        $em->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $entity);

    }

    public function getSubscribedEvents()
    {
        return ['prePersist', 'preUpdate'];
    }

}