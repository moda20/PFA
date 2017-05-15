<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 2/24/2017
 * Time: 9:34 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class HomePageController extends Controller
{
    /**
     * @Route("/home", name="Home_page")
     *
     */
    public function Homepage(){
        $BestDealTickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->GetAllWithinAWeek();
        dump($BestDealTickets);
        $cursrc = '/'.$this->getParameter("images_directory").'/';
        $manufacturers= $this->getDoctrine()->getRepository('AppBundle:Constructeur')->findAll();
        $notifications=$this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1)->getNotifications();
        $allDeals =$this->getDoctrine()->getRepository("AppBundle:Annonce")->getAllByDate();
        return $this->render('home/homepage.html.twig',[
        'bestdeal' => $BestDealTickets,
        'cursrc' => $cursrc,
        'manufacturers' => $manufacturers,
        'notifications' =>$notifications,
        'allDeals' => $allDeals,
        ]);
    }
    /**
     * @Route("/Search", name="search")
     */
        public function SearchResults(Request $request)
        {
            $SearchKey= $_GET['searchKey'];
            dump($SearchKey);
            $SearchDeals = $this->getDoctrine()->getRepository("AppBundle:Annonce")->SearchResults($SearchKey);
            dump($SearchDeals);
            $BestDealTickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->GetAllWithinAWeek();
            dump($BestDealTickets);
            $SearchUsers =$this->getDoctrine()->getRepository("AppBundle:Utilisateur")->SearchUsers($SearchKey);
            $cursrc = '/'.$this->getParameter("images_directory").'/';
            $manufacturers= $this->getDoctrine()->getRepository('AppBundle:Constructeur')->findAll();
            return $this->render('home/homepage.html.twig',[
                'bestdeal' => $BestDealTickets,
                'cursrc' => $cursrc,
                'SearchDeals' => $SearchDeals,
                'SearchUsers' => $SearchUsers,
                'manufacturers' => $manufacturers,
            ]);
        }

    /**
     * @Route("/DeepSearch", name="deep_search")
     */
        public function DeepSearchResults(){
            $Price1= $_GET['Price1'];
            $Price2= $_GET['Price2'];
            $manufac= $_GET['manufac'];
            $carburant= $_GET['carburant'];
            $puissancefiscale= $_GET['Pf'];
            $ConsommationUrbaine= $_GET['ConsUrbaine'];
            $MaxRev= $_GET['MaxRev'];
            $args =['price1' => $Price1,'price2' => $Price2,'manuf' => $manufac,'carburant' =>$carburant==''?'NOTACCEPTED':$carburant,'pf'=>$puissancefiscale==''?'NOTACCEPTED':$puissancefiscale,
                'CU' => $ConsommationUrbaine==''?'NOTACCEPTED':$ConsommationUrbaine,'MaxR' =>$MaxRev==''?'NOTACCEPTED':$MaxRev
            ];
            dump($args);
            $DeepSearchTickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->DeepSearch($args);
            $BestDealTickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->GetAllWithinAWeek();
            $cursrc = '/'.$this->getParameter("images_directory").'/';
            $manufacturers= $this->getDoctrine()->getRepository('AppBundle:Constructeur')->findAll();
            return $this->render('home/homepage.html.twig',[
                'bestdeal' => $BestDealTickets,
                'cursrc' => $cursrc,
                'manufacturers' => $manufacturers,
                'SearchDeals' => $DeepSearchTickets,
            ]);
        }
}