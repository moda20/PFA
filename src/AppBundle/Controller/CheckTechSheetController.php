<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\FicheTech;
use AppBundle\Entity\Utilisateur;
use AppBundle\Form\TicketForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CheckTechSheetController extends Controller
{
    /**
     * @Route("/Sheet/{id}", name="user_tech_sheet")
     */
    public  function getTicket(Request $request, FicheTech $TS){
        $cursrc = '/'.$this->getParameter("images_directory").'/';
        return $this->render('default/CheckTechSheet.html.twig',[
            'ticket'=> $TS,
            'cursrc' => $cursrc,
        ]);
    }


    /**
     * @Route("/Sheet/{id}/remove", name="user_tech_sheet_remove")
     */

    public function removeTicket(Request $request, FicheTech $TS){
        $this->denyAccessUnlessGranted('ROLE_OWN', $TS);
        $em = $this->getDoctrine()->getManager();
        $em->remove($TS);
        $em->flush();
        }
}
