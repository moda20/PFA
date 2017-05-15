<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CheckAllTicketsController extends Controller
{
    /**
     * @Route("/MyTickets", name="all_user_ticket")
     */
    public  function getTicket(Request $request){
        $user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();

        $cursrc = '/'.$this->getParameter("images_directory").'/';
        $tickets =$this->getDoctrine()->getRepository('AppBundle:Annonce')->findAllTicketsOfOne($user);
        return $this->render('User/CheckTickets.html.twig',[
            'tickets' => $tickets,
            'cursrc' => $cursrc
        ]);
    }
}
