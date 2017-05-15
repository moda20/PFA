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


class CarRepository extends EntityRepository
{



    /**
     * @return Voiture[]
     */
      public function getAllAlphabetic(){
          return  $this->createQueryBuilder("Voiture")->orderBy('Voiture.id','ASC')->getQuery()->execute();
      }

      public function getOne($id){
          return $this->createQueryBuilder('Voiture')
              ->andWhere('Voiture.id = :id')
              ->setParameter('id', $id)
              ->getQuery()
              ->execute();
      }
    public function getOneAPI($id){
        return $this->createQueryBuilder('Voiture')
            ->andWhere('Voiture.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getArrayResult();
    }

    /**
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getOneQuery($id){
        return $this->createQueryBuilder('Voiture')
            ->andWhere('Voiture.id = :id')
            ->setParameter('id', $id);
    }
    /**
     * @param $id
     * @return String[]
     */
      public function getPhotos($id){
          $Car =$this->createQueryBuilder('Voiture')
              ->andWhere('Voiture.id = :id')
              ->setParameter('id', $id)
              ->getQuery()
              ->execute();
          return $Car->photos;
      }

    /**
     * @param $id
     */
      public function getAllCarsOfOne($id){
          $cars =$this->createQueryBuilder('Voiture')
              ->andWhere('Voiture.Utilisateur = :id')
              ->setParameter('id', $id);


          return $cars;
      }

      /**
       * @return Constructeur[]
       *
       */
      public function getallConstrutors(){
          return $this->createQueryBuilder('Constructeur')->getQuery()->execute();
      }


}