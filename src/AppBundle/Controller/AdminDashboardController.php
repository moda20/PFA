<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\Constructeur;
use AppBundle\Entity\Parameters;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends Controller
{
    /**
     * @Route("/Admin/Dashboard", name="admin_dashboard")
     */
    public function indexAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $Tickets = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->finallNonApproved();
        $TicketswithinMonth = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->GetAllWithinAMonth();
        $Ticketsoffirstweek =[];
        $Ticketsofsecondweek =[];
        $Ticketsofthirdweek =[];
        $Ticketsoffourthtweek =[];

        foreach ($TicketswithinMonth as $ticket){
            if ($ticket->getDateAjoutAnnonce()< mktime(0,0,0,date("m")-1,date("d")+7,date("y"))){
                array_push($Ticketsoffirstweek,$ticket);
            }
            if ($ticket->getDateAjoutAnnonce()>= mktime(0,0,0,date("m")-1,date("d")+7,date("y")) && $ticket->getDateAjoutAnnonce()< mktime(0,0,0,date("m")-1,date("d")+14,date("y"))){
                array_push($Ticketsofsecondweek,$ticket);
            }
            if ($ticket->getDateAjoutAnnonce()>= mktime(0,0,0,date("m")-1,date("d")+14,date("y")) && $ticket->getDateAjoutAnnonce()< mktime(0,0,0,date("m")-1,date("d")+21,date("y"))){
                array_push($Ticketsofthirdweek,$ticket);
            }
            if ($ticket->getDateAjoutAnnonce()>= mktime(0,0,0,date("m")-1,date("d")+21,date("y")) && $ticket->getDateAjoutAnnonce()< mktime(0,0,0,date("m"),date("d"),date("y"))){
                array_push($Ticketsoffourthtweek,$ticket);
            }
        }

        $cursrc = '/'.$this->getParameter("images_directory").'/';

        return $this->render('Admin/AdminDashboard.html.twig', array(
            'Tickets' => $Tickets,
            'cursrc' => $cursrc
        ));
    }

    /**
     * @Route("/Admin/Params", name="admin_params")
     */
    public function GetAllparameters (){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $manuf =$this->getDoctrine()->getRepository("AppBundle:Constructeur")->findAll();
        $params =$allnotifications = $this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
        $argusparams = $params->getArgusparams();
        $allnotifications = $params->getNotifications();
        $ismsgon = $params->getIsMessageOn();
        $isvalidon = $params->getIsValidationOn();
        $isincron = $params->getIsSignupOn();
        dump($allnotifications);
        return $this->render("Admin/Params.html.twig", [
            'validation' => $isvalidon,
            'messages' => $ismsgon,
            'signup' => $isincron,
            'notifications' => $allnotifications,
            'manuf' => $manuf,
            'argusparams' => $argusparams,
        ]);
    }

    /**
     * @Route("/Admin/AddManuf", name="admin_new_manuf")
     */
    public function AddConstructor(Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $url =$request->headers->get('referer');
        dump($url);
        $data =$request->request->all();
        $manuf=new Constructeur();
        $manuf->setNom($data["Const"]);
        $em = $this->getDoctrine()->getManager();
        $em->persist($manuf);
        $em->flush();
        return $this->redirectToRoute("admin_params");
    }
    /**
     * @Route("/Admin/DeleteManuf/{id}", name="admin_delete_manuf")
     */
        public function DeleteConstructor(Request $request, Constructeur $ct){
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
            $em = $this->getDoctrine()->getManager();
            $em->remove($ct);
            $em->flush();
            return $this->redirectToRoute("admin_params");
        }

    /**
     * @Route("/Admin/SiteParams", name="admin_site_params")
     */
        public function SiteParams(Request $request){
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
            $data = $request->request->all();
            dump($data);
            $params=$this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
            //$params->setIsMessageOn($data["messages"]=='Y'? true:false);
            $params->setIsSignupOn($data["inscr"]=='Y'? true:false);
            $params->setIsValidationOn($data["valid"]=='Y'? true:false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($params);
            $em->flush();
            return $this->redirectToRoute("admin_params");
        }

    /**
     * @Route("/Admin/AddNotifications", name="admin_new_notification")
     */
    public function AddNotification(Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $data = $request->request->all();
        $params=$this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
        $notarray = $params->getNotifications();
        array_push($notarray, $data["NotificaitonTitle"]." : ".$data["NotificationText"]);
        $params->setNotifications($notarray);
        $em = $this->getDoctrine()->getManager();
        $em->persist($params);
        $em->flush();
        return $this->redirectToRoute("admin_params");
    }
    /**
     * @Route("/Aamin/DeleteNotification/{id}" , name="admin_delete_notification" )
     */
    public function DeleteNotification($id){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $params=$this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
        $notarray = $params->getNotifications();
        unset($notarray[$id]);
        $params->setNotifications($notarray);
        $em = $this->getDoctrine()->getManager();
        $em->persist($params);
        $em->flush();
        return $this->redirectToRoute("admin_params");
    }
    /**
     * @Route("/ArgusParams", name="admin_update_argus")
     */
    public function UpdateArgusParams(Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $data = $request->request->all();
        $params=$this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
        $notarray = [];
        array_push($notarray, $data["Y1"],$data["Y2"],$data["YX"]);
        $params->setArgusparams($notarray);
        $em = $this->getDoctrine()->getManager();
        $em->persist($params);
        $em->flush();
        return $this->redirectToRoute("admin_params");
    }
}
