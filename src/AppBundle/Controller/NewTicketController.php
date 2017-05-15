<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\Voiture;
use AppBundle\Form\TicketForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewTicketController extends Controller
{
    /**
     * @param Annonce $car
     *
     * @return int
     */
    public function CalculateArgus($car){
        $params = $this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1)->getArgusparams();
        if ($car->getVoiture()->getFicheTech()->getDateCommerce())
        {
            $years = date_create((date("Y/m/d")))->diff($car->getVoiture()->getFicheTech()->getDateCommerce())->y;
        } else{return 0;}

        $argus =0;
        if ($years ==1 && $years){
            $argus = $car->getPrix()- ($car->getPrix()*$params["0"]/100);
        }
        if ($years > 1 && $years <=2 && $years){
            $argus = $car->getPrix()- ($car->getPrix()*$params["0"]/100)-($car->getPrix()*$params["1"]/100);
        }
        if ($years > 2 && $years){
            $argus = $car->getPrix()- ($car->getPrix()*$params["0"]/100)-($car->getPrix()*$params["1"]/100)-($years-2)*($car->getPrix()*$params["2"]/100);
        }
        return $argus;
    }
    /**
     * @Route("/newTicket", name="new_ticket")
     */
    public function newTicket(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();
        $ticket = new Annonce();
        $form = $this->createForm(TicketForm::class, $ticket,['userId' =>$user->getId()]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->get('security.token_storage')
                ->getToken()
                ->getUser();
            $ticket->getVoiture()->setUtilisateur($user);
            $ticket->getVoiture()->getFicheTech()->setUtilisateur($user);
            $ticket->setUtilisateur($user);
            $ticket->getVoiture()->setArgus($this->CalculateArgus($ticket));
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
            $ticket->setDateAjoutAnnonce(date_create((date("Y/m/d"))));
            $validation = $this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
            $ticket->setStatus($validation->getIsValidationOn()!=0 ? false : true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            $this->addFlash('success', sprintf("Félecitation (%s) votre Annonce a été ajouté!", $this->getUser()->getNom()));
            return $this->redirectToRoute("user_profile",[
                'id' => $user->getId(),
            ]);
        }
        return $this->render('User/AddTicket.html.twig',[
            'TicketForm' => $form->createView(),
            'validation_groups' => ['Default','Registration'],
        ]);
    }
}
