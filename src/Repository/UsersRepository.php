<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/20/2017
 * Time: 2:53 PM
 */

namespace Repository;


use AppBundle\Entity\Utilisateur;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Voiture;


class UsersRepository extends EntityRepository
{
    /**
     * @return Utilisateur[]
     */
    public function findAllPublishedOrderedByRecentlyActive()
    {
        return $this->createQueryBuilder('Utilisateur')
            /*->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->leftJoin('genus.notes', 'genus_note')*/
            ->orderBy('Utilisateur.id', 'ASC')
            ->getQuery()
            ->execute();
    }

    public function getONeAPI($id)
    {
        return $this->createQueryBuilder('Utilisateur')
            /*->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->leftJoin('genus.notes', 'genus_note')*/
            ->where("Utilisateur.id = :x")
            ->setParameter("x", $id)
            ->getQuery()
            ->getArrayResult();
    }

    public function findByUsername($username){
        $this->createQueryBuilder('Utilisateur')
            ->where('Utilisateur.username = :un')
            ->setParameter('un', $username)->getQuery()->execute();
    }
    /**
     * @return Utilisateur[]
     * @param string $value
     */
    public function SearchUsers( $value)
    {
        return $this->createQueryBuilder('Utilisateur')
            /*->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->leftJoin('genus.notes', 'genus_note')*/
            ->where("Utilisateur.nom LIKE :X")
            ->orWhere("Utilisateur.pays LIKE :X")
            ->orWhere("Utilisateur.adresse LIKE :X")
            ->orWhere("Utilisateur.ville LIKE :X")
            ->orderBy('Utilisateur.id', 'ASC')
            ->setParameter("X",$value)
            ->getQuery()
            ->execute();
    }
}