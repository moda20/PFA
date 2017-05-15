<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/20/2017
 * Time: 2:53 PM
 */

namespace Repository;


use AppBundle\Entity\Annonce;
use AppBundle\Entity\Utilisateur;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Voiture;


class TicketRepository extends EntityRepository
{
    /**
     * @return Annonce[]
     */
    public function findAllTicketsOfOne($user)
    {
        return $this->createQueryBuilder('Annonce')
            /*->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->leftJoin('genus.notes', 'genus_note')*/
            ->where('Annonce.Utilisateur = :user')
            ->orderBy('Annonce.id', 'ASC')
            ->setParameter('user',$user)
            ->getQuery()
            ->execute();
    }

    /**
     *
     */
    public function GetALL(){
        return $this->createQueryBuilder('Annonce')
            ->where("Annonce.status = true")
            ->getQuery()
            ->getArrayResult();
    }

        public function GetALLOFONE($id){
            return $this->createQueryBuilder('Annonce')
                ->where("Annonce.status = true")
                ->join("Annonce.Utilisateur","user")
                ->where("user.id = :id")
                ->setParameter('id', $id)
                ->getQuery()
                ->getArrayResult();
        }
    /**
     * @return Annonce[]
     */
    public function finallNonApproved(){
        return $this->createQueryBuilder('Annonce')
            ->where('Annonce.status =:x')
            ->orderBy('Annonce.Voiture', 'ASC')
            ->setParameter('x', 0)
            ->getQuery()
            ->execute();
    }

    /**
     * @return Annonce[]
     */
    public function GetAllWithinAMonth()
    {
        return $this->createQueryBuilder('Annonce')
            ->where("Annonce.DateAjoutAnnonce < :X ")
            ->andWhere("Annonce.DateAjoutAnnonce> :Y")->andWhere("Annonce.status = true")->orderBy("Annonce.DateAjoutAnnonce")
            ->setParameters(["X" =>date("Y/m/d"), "Y" => mktime(0,0,0,date("m")-1,date("d"),date("Y"))])
            ->getQuery()
            ->execute();
    }
    /**
     * @return Annonce[]
     */
    public function GetAllWithinAWeek()
    {
        return $this->createQueryBuilder('Annonce')
            ->where("Annonce.DateAjoutAnnonce <= :X ")
            ->andWhere("Annonce.DateAjoutAnnonce >= :Y")->andWhere("Annonce.status = true")->orderBy("Annonce.DateAjoutAnnonce")
            ->setParameters(["X" =>date_create(date("Y/m/d")), "Y" => date_create(date("m/d/Y", strtotime("last week monday")))])
            ->getQuery()
            ->execute();
    }

    /**
     * @return Annonce[]
     * @param Annonce $ticket
     */
    public function GetAllLikeOne($ticket)
    {

        return $this->createQueryBuilder('Annonce')
            ->where("Annonce.Utilisateur = :X ")
            ->orWhere("Annonce.DateAjoutAnnonce = :Y")->orWhere("Annonce.name like :Z")->andWhere("Annonce.status = true")->orderBy("Annonce.DateAjoutAnnonce")
            ->setParameters(["X" =>$ticket->getUtilisateur(), "Y" => $ticket->getDateAjoutAnnonce(), "Z" => $ticket->getNom()])
            ->getQuery()
            ->execute();
    }
    /**
     * @return Annonce[]
     * @param string $value
     */
    public function SearchResults($value)
    {
        return $this->createQueryBuilder('Annonce')
            ->where("  Annonce.nom LIKE :X ")
            ->andwhere("Annonce.status = true")
            ->join("Annonce.Utilisateur", "user")
            ->orWhere("user.nom LIKE :X")
            ->orWhere("Annonce.Description LIKE :X ")->orderBy("Annonce.DateAjoutAnnonce")
            ->setParameters(["X" => '%'.$value.'%'])
            ->getQuery()
            ->execute();
    }
    public function SearchResultsAPI($value)
    {
        return $this->createQueryBuilder('Annonce')
            ->where("  Annonce.nom LIKE :X ")
            ->andwhere("Annonce.status = true")
            ->join("Annonce.Utilisateur", "user")
            ->orWhere("user.nom LIKE :X")
            ->orWhere("Annonce.Description LIKE :X ")->orderBy("Annonce.DateAjoutAnnonce")
            ->setParameters(["X" => '%'.$value.'%'])
            ->getQuery()
            ->getArrayResult();
    }

    /**
     * @param [] $value
     * @return Annonce[]
     */
    public function DeepSearch($value){
        return $this->createQueryBuilder('Annonce')
            ->andWhere("Annonce.Prix >= :p1 AND Annonce.Prix <= :p2")
            ->join("Annonce.Voiture","voiture")
            ->join("voiture.Constructeur", "ct")
            ->orWhere("ct.Nom LIKE :manuf")
            ->leftJoin('voiture.ficheTech',"fichetech")
            ->orWhere("fichetech.carburant LIKE :carburant")
            ->orWhere("fichetech.puissanceFiscale LIKE :pf")
            ->orWhere("fichetech.consommationUrbaine100Km LIKE :CU")
            ->orWhere("fichetech.maxRevision LIKE :MaxR")
            ->setParameters(['p1' => $value["price1"], 'p2' => $value["price2"], 'manuf' => '%'.$value["manuf"].'%',
                'carburant' =>'%'.$value["carburant"].'%', 'pf' => '%'.$value["pf"].'%', 'CU' => '%'.$value["CU"].'%',
                'MaxR' => '%'.$value["MaxR"].'%'
            ])
            ->getQuery()->execute();
    }

    /**
     * @param Annonce $value
     * @return Annonce[]
     */
    public function getallinrange($value,$args){
        return $this->createQueryBuilder('Annonce')
            ->where("Annonce.status = true")
            ->andWhere("Annonce.Prix < :x and Annonce.Prix > :y")
            ->join("Annonce.Voiture","vt")
            ->leftJoin("vt.ficheTech", "ft")
            ->leftJoin("vt.Constructeur"," ct")
            ->orWhere("vt.nomVoiture LIKE :vtr")
            ->orWhere("ft.dateCommerce < :t and ft.dateCommerce > :r")
            ->orWhere("vt.ModeleVoiture LIKE :p")
            ->orWhere("ct.Nom LIKE :ctm")
            ->setParameters(["x" => $args["prix"]==true?$value->getPrix()+(1/2 * $value->getPrix()):9000000000000,"y" => $args["prix"]==true?$value->getPrix()-(1/2 * $value->getPrix()):0
                , "t" => $value->getVoiture()->getFicheTech()->getDateCommerce()!= null && $args["DC"]==true ?$value->getVoiture()->getFicheTech()->getDateCommerce()->sub(new \DateInterval("P7Y")):'',
                "r"=> $value->getVoiture()->getFicheTech()->getDateCommerce()!=null && $args["DC"]==true ?$value->getVoiture()->getFicheTech()->getDateCommerce()->add(new \DateInterval("P7Y")):'',
                "p" =>'%'.$value->getVoiture()->getModeleVoiture().'%', "vtr" => '%'.$value->getVoiture()->getNomVoiture().'%',
                "ctm" => '%'.$value->getVoiture()->getConstructeur()->getNom().'%'
            ])
            ->orderBy("vt.ModeleVoiture","ASC")
            ->orderBy("Annonce.Prix","DESC")
            ->addOrderBy("ft.dateCommerce")
            ->getQuery()
            ->execute();
    }

    /**
 * @return Annonce[]
 */
    public function getAllByDate(){
        return $this->createQueryBuilder("Annonce")
            ->where("Annonce.status = true")
            ->orderBy("Annonce.DateAjoutAnnonce")
            ->getQuery()
            ->execute();
    }
    /**
     * @return Annonce[]
     */
    public function getAllapp(){
        return $this->createQueryBuilder("Annonce")
            ->where("Annonce.status = true")
            ->getQuery()
            ->execute();
    }
}
