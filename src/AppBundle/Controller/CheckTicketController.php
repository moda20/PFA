<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\Utilisateur;
use AppBundle\Form\TicketForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CheckTicketController extends Controller
{

    /**
     * @Route("/Ticket/{id}", name="user_ticket")
     */
    public  function getTicket(Request $request, Annonce $ticket){
        $cursrc = '/'.$this->getParameter("images_directory").'/';
        return $this->render('default/CheckTicket.html.twig',[
            'ticket'=> $ticket,
            'cursrc' => $cursrc,
        ]);
    }

    /**
     * @Route("/Ticket/{id}/edit", name="user_ticket_edit")
     */
    public function editTicket(Request $request, Annonce $ticket){
        $user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();
        $this->denyAccessUnlessGranted('ROLE_OWN',$ticket);
        $image =$this->getDoctrine()->getRepository('AppBundle:Voiture')->find($ticket->getVoiture()->getId())->getPhoto();
        $form = $this->createForm(TicketForm::class, $ticket,['userId' =>$user->getId()]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $ticket->getVoiture()->setUtilisateur($user);
            $ticket->setUtilisateur($user);
            $CAR2 =$ticket->getVoiture();
            $file =$CAR2 ->getPhoto();
            if ($file != null){
                $fileName =md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter("images_directory"),$fileName);
                $CAR2->setPhoto($fileName);
            }
            else{
                $CAR2->setPhoto($image);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            $this->addFlash('success',"Félecitation votre annonce a été modifié");
            return $this->redirectToRoute("user_ticket",[
                'id'=> $ticket->getId(),
            ]);
        }
        return $this->render('User/AddTicket.html.twig',[
            'TicketForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/Ticket/{id}/remove", name="user_ticket_remove")
     */

    public function removeTicket(Request $request, Annonce $ticket)
    {
        $id = $ticket->getUtilisateur()->getId();
        $this->denyAccessUnlessGranted('ROLE_OWN', $ticket);
        $em = $this->getDoctrine()->getManager();
        $em->remove($ticket);
        $em->flush();
        $this->addFlash('success',"Félecitation votre annonce a été supprimée");
        return $this->redirectToRoute("user_profile", [
            'id' => $id,
        ]);
    }

}
