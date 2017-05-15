<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/18/2017
 * Time: 8:54 PM
 */

namespace Repository;


use AppBundle\Entity\Constructeur;
use AppBundle\Entity\FicheTech;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Voiture;
use Doctrine\ORM\Mapping;


class TechSheetRepository extends EntityRepository
{




    public function getOneAPI($id){
        return $this->createQueryBuilder("FicheTech")
            ->where("FicheTech.id = :x")
            ->setParameter('x', $id)
            ->getQuery()
            ->getArrayResult();
    }


}