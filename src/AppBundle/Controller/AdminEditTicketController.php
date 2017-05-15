<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Administrateur;
use AppBundle\Entity\Annonce;
use AppBundle\Entity\Utilisateur;
use AppBundle\Form\AdminForm;
use AppBundle\Form\NewUserForm;
use AppBundle\Form\TicketForm;
use AppBundle\Form\UserForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminEditTicketController extends Controller
{
    /**
     * @Route("Admin/Ticket/{id}/edit", name="Admin_edit_ticket")
     */
    public function EditUser(Request $request, Annonce $ticket)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $image =$this->getDoctrine()->getRepository('AppBundle:Annonce')->find($ticket->getId())->getVoiture()->getPhoto();
        $form = $this->createForm(TicketForm::class, $ticket);
        $form->handleRequest($request);
        $cursrc = '/'.$this->getParameter("images_directory").'/'.$ticket->getVoiture()->getPhoto();
        $curuser =$ticket->getUtilisateur()->getNom();
        if ($form->isSubmitted() && $form->isValid()){
            $file =$ticket->getVoiture()->getPhoto();
            if ($file != null){
                $fileName =md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter("images_directory"),$fileName);
                $ticket->getVoiture()->setPhoto($fileName);
            }else{
                $ticket->getVoiture()->setPhoto($image);
            }

            $em = $this->getDoctrine()->getManager();
            $em->merge($ticket);
            $em->flush();
            $this->addFlash('success',"Annonce modifié");
            return $this->redirectToRoute("Admin_ticket_list");
        }
        return $this->render('User/AddTicket.html.twig',[
            'TicketForm' => $form->createView(),
            'UserName' => $curuser,
            'CarPhoto' =>$cursrc,
        ]);
    }
    /**
     * @Route("/Admin/TicketsList", name="Admin_ticket_list")
     */
    public function GetUserList(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $Tickets = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        return $this->render('Admin/Tickets.html.twig', array(
            'Tickets' => $Tickets
        ));
    }

    /**
     * @Route("/Admin/Ticket/{id}/delete", name="Admin_delete_ticket")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function DeleteTicket(Request $request, Annonce $ticket){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $em->remove($ticket);
        $em->flush();
        return $this->redirectToRoute("Admin_ticket_list");
    }


    /**
     * @Route("/Admin/newTicket", name="admin_new_ticket")
     */
    public function AdminAddUser(Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $ticket = new Annonce();
        $form = $this->createForm(TicketForm::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->get('security.token_storage')
                ->getToken()
                ->getUser();
            $ticket->getVoiture()->setUtilisateur($user);
            $ticket->getVoiture()->getFicheTech()->setUtilisateur($user);
            $ticket->setUtilisateur($user);
            $CAR2 =$ticket->getVoiture();
            $file =$CAR2 ->getPhoto();
            if ($file != null){
                $fileName =md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter("images_directory"),$fileName);
                $CAR2->setPhoto($fileName);
            }
            else{
                $CAR2->setPhoto('/DefaultCar.gif');
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            $this->addFlash('success', sprintf("Félecitation (%s) votre Annonce a été ajouté!", $this->getUser()->getNom()));
            return $this->redirectToRoute("Admin_ticket_list",[
            ]);

        }
        return $this->render('User/AddTicket.html.twig',[
            'TicketForm' => $form->createView(),
            'validation_groups' => ['Default','Registration'],
        ]);
    }

    /**
     * @Route("/Approve/{id}", name="approve")
     */
    public  function AdminAproveTicket(Request $request, Annonce $ticket){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $ticket->setStatus(true);
        $em = $this->getDoctrine()->getManager();
        $em->merge($ticket);
        $em->flush();
        return $this->redirectToRoute("Admin_ticket_list");
    }
    /**
     * @Route("/DisApprove/{id}", name="disapprove")
     */
    public  function AdmindisAproveTicket(Request $request, Annonce $ticket){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $ticket->setStatus(false);
        $em = $this->getDoctrine()->getManager();
        $em->merge($ticket);
        $em->flush();
        return $this->redirectToRoute("Admin_ticket_list");
    }
    /**
     * @Route("/ApproveD/{id}", name="approveD")
     */
    public  function AdminAproveTicketD(Request $request, Annonce $ticket){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $ticket->setStatus(true);
        $em = $this->getDoctrine()->getManager();
        $em->merge($ticket);
        $em->flush();
        return $this->redirectToRoute("admin_dashboard");
    }
    /**
     * @Route("/DisApproveD/{id}", name="disapproveD")
     */
    public  function AdmindisAproveTicketD(Request $request, Annonce $ticket){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $ticket->setStatus(false);
        $em = $this->getDoctrine()->getManager();
        $em->merge($ticket);
        $em->flush();
        return $this->redirectToRoute("admin_dashboard");
    }
    /**
     * @Route("/Admin/Ticket/{id}/deleteD", name="Admin_delete_ticketD")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function DeleteTicketD(Request $request, Annonce $ticket){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $em->remove($ticket);
        $em->flush();
        return $this->redirectToRoute("admin_dashboard");
    }
    /**
     * @Route("/Admin/ApproveAll", name="admin_aprove_all")
     */
    public function ApproveAll(){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $Tickets = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->finallNonApproved();
        $em = $this->getDoctrine()->getManager();
        foreach ($Tickets as $ticket){
            $ticket->setStatus(true);
            $em->merge($ticket);
            $em->flush();
        }
        return $this->redirectToRoute("admin_dashboard");
    }
}
