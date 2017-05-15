<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/18/2017
 * Time: 8:54 PM
 */

namespace Repository;


use AppBundle\Entity\Constructeur;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Voiture;
use Doctrine\ORM\Mapping;


class Constructor extends EntityRepository
{



      /**
       * @return Constructeur[]
       *
       */
      public function getallConstrutors(){
          return $this->createQueryBuilder('Constructeur')->getQuery()->execute();
      }


}