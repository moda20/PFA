<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Utilisateur;
use AppBundle\Form\NewUserForm;
use AppBundle\Form\UserForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class NewUserController extends Controller
{

    /**
     * @Route("/newUser", name="new_user")
     */
    public function NewUser(Request $request){
        $param=$this->getDoctrine()->getRepository("AppBundle:Parameters")->find(1);
        if ($param->getIsSignupOn() != true){
            return $this->render("default/NotAvailable.html.twig", [
                'key' => "l'inscription"
            ]);
        }
        $USER = new Utilisateur();
        $form = $this->createForm(NewUserForm::class, $USER);
        $form->handleRequest($request);
        $userName =$USER->getNom();

        if ($form->isSubmitted() && $form->isValid()){
            $file =$USER ->getPhoto();
            if ($file != null){
                $fileName =md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter("images_directory"),$fileName);
                $USER->setPhoto($fileName);
            }
            else{
                $USER->setPhoto('DefaultUser.png');
            }
            $token = $this->get('lexik_jwt_authentication.encoder')
                ->encode([
                    'username' => $USER->getUsername(),
                    'exp' => time() + 900000000000 //
                ]);
            $USER->setToken($token);
            $USER->setHistorique(["Vous n'avez pas encore d'historique"]);
            //$car= $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($USER);
            $em->flush();
            $this->addFlash('success',"Félecitation Le compte a été ajouté");
            return $this->get('security.authentication.guard_handler')->authenticateUserAndHandleSuccess(
                $USER,
                $request,
                $this->get('app.security.login_form_authenticator'),
                'main'
            );
        }
        return $this->render('User/AddUser.html.twig',[
            'UserForm' => $form->createView(),
            'Status' => 'Nouvel Utilisateur',
            'UserHistory'=>["Vous n'avez pas encore d'historique"],
            'UserImage'=> '/'.$this->getParameter("images_directory").'/DefaultUser.png',
            'validation_groups' => ['Default', 'Registration'],
        ]);
    }

    /**
     * @Route("/User/{id}/edit", name="user_edit_User")
     */
    public function EditUser(Request $request, Utilisateur $USER){
        $em = $this->getDoctrine()->getManager();
        $image =$this->getDoctrine()->getRepository('AppBundle:Utilisateur')->find($USER->getId())->getPhoto();
        $this->denyAccessUnlessGranted('ROLE_OWN',$USER);
        $form = $this->createForm(NewUserForm::class, $USER);
        $form->handleRequest($request);
        $cursrc = '/'.$this->getParameter("images_directory").'/'.$USER->getPhoto();
        $userName =$USER->getNom();
        if ($form->isSubmitted() && $form->isValid()){
            $file =$USER ->getPhoto();
            if ($file != null){
                $fileName =md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter("images_directory"),$fileName);
                $USER->setPhoto($fileName);
            }
            else{
                $USER->setPhoto($image);
            }
            if ($USER->getPassword()!=null){
                $encoded = $this->get('security.password_encoder')->encodePassword($USER, $USER->getPassword());
                $USER->setPassword($encoded);
            }

            $em = $this->getDoctrine()->getManager();
            $em->merge($USER);
            $em->flush();
            $this->addFlash('success',"Félecitation Le compte utilisateur a été modifié");
            return $this->redirectToRoute("user_profile", [
                'id' => $USER->getId(),
            ]);
        }
        return $this->render('User/AddUser.html.twig',[
            'UserForm' => $form->createView(),
            'Status' => $userName,
            'UserImage' =>$cursrc,
            'UserHistory' => $USER->getHistorique(),
        ]);
    }
}
