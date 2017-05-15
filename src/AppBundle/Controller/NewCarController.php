<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 2/26/2017
 * Time: 1:19 PM
 */

namespace AppBundle\Controller;


use AppBundle\AppBundle;
use AppBundle\Entity\Voiture;
use AppBundle\Form\NewCarForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class NewCarController extends Controller
{

    /**
     * @Route("/newCar", name ="new_car")
     */
    public function NewCar(Request $request){
        $this->denyAccessUnlessGranted('ROLE_USER');
        $CAR2 = new Voiture();
        $form = $this->createForm(NewCarForm::class, $CAR2);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $this->get('security.token_storage')
                ->getToken()
                ->getUser();
            $CAR2->setUtilisateur($user);
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
            $em->persist($CAR2);
            $em->flush();
            $this->addFlash('success', sprintf("Félecitation (%s)  votre automobile a été ajouté!", $this->getUser()->getNom()));
            return $this->redirectToRoute("Home_page");

        }
        return $this->render('User/AddCar.html.twig',[
            'NewCarForm' => $form->createView(),
            'validation_groups' => ['Default',"newCar"],
        ]);
    }

    /**
     * @Route("/Car/{id}/edit", name="edit_car")
     * @param Request $request
     * @param Voiture $car
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function EditCar(Request $request, Voiture $car){
        $this->denyAccessUnlessGranted('ROLE_OWN',$car);
        $em = $this->getDoctrine()->getManager();
        $image =$this->getDoctrine()->getRepository('AppBundle:Voiture')->find($car->getId())->getPhoto();
        $form = $this->createForm(NewCarForm::class, $car,['car' =>$car]);
        $form->handleRequest($request);
        $cursrc = '/'.$this->getParameter("images_directory").'/'.$car->getPhoto();

        if ($form->isSubmitted() && $form->isValid()){
            $file =$car ->getPhoto();
            if ($file != null){
                $fileName =md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter("images_directory"),$fileName);
                $car->setPhoto($fileName);
            }
            else{
                $car->setPhoto($image);

            }

            $em->persist($car);
            $em->flush();
            $this->addFlash('success',"Félecitation votre annonce a été modifié");
            return $this->redirectToRoute("check_car",[
                    'id' =>$car->getId(),
                ]);
        }
        return $this->render('User/EditCar.html.twig',[
            'NewCarForm' => $form->createView(),
            'currsrc' => $cursrc,
        ]);
    }

}