<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Administrateur;
use AppBundle\Entity\Utilisateur;
use AppBundle\Form\AdminForm;
use AppBundle\Form\NewUserForm;
use AppBundle\Form\UserForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminEditUSerController extends Controller
{
    /**
     * @Route("Admin/User/{id}/edit", name="edit_user")
     */
    public function EditUser(Request $request, Utilisateur $user)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $image =$this->getDoctrine()->getRepository('AppBundle:Utilisateur')->find($user->getId())->getPhoto();
        $form = $this->createForm(UserForm::class, $user);
        $form->handleRequest($request);
        $cursrc = '/'.$this->getParameter("images_directory").'/'.$user->getPhoto();
        $curuser =$user->getNom();
        $userhistory =$user->getHistorique();
        if ($form->isSubmitted() && $form->isValid()){
            $file =$user ->getPhoto();
            if ($file != null){
                $fileName =md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter("images_directory"),$fileName);
                $user->setPhoto($fileName);
            }else{
                $user->setPhoto($image);
            }
            if ($user->getPassword()!=null){
                $encoded = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
                $user->setPassword($encoded);
            }
            $em = $this->getDoctrine()->getManager();
            $em->merge($user);
            $em->flush();
            $this->addFlash('success',"Utilisateur modifié");
            return $this->redirectToRoute("users_list");
        }
        return $this->render('Admin/AdminEditUser.html.twig',[
            'UserForm' => $form->createView(),
            'UserName' => $curuser,
            'UserImage' =>$cursrc,
            'UserHistory' => $userhistory,
        ]);
    }
    /**
     * @Route("/Admin/UsersList", name="users_list")
     */
    public function GetUserList(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $Users = $this->getDoctrine()
            ->getRepository('AppBundle:Utilisateur')
            ->findAllPublishedOrderedByRecentlyActive();

        return $this->render('Admin/Users.html.twig', array(
            'Users' => $Users
        ));
    }

    /**
     * @Route("/Admin/User/{id}/delete", name="delete_user")
     * @param Request $request
     * @param Utilisateur $USER
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function DeleteUser(Request $request, Utilisateur $USER){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $em->remove($USER);
        $em->flush();
        return $this->redirectToRoute("users_list");
    }


    /**
     * @Route("/Admin/newUser", name="admin_new_user")
     */
    public function AdminAddUser(Request $request){
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
     * @Route("/Admin/newAdmin", name="admin_new_admin")
     */
    public function AdminAddAdmin(Request $request){
        $USER = new Administrateur();
        $form = $this->createForm(AdminForm::class, $USER);
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
            $USER->setHistorique(["Vous n'avez pas encore d'historique"]);
            //$car= $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($USER);
            $em->flush();
            $this->addFlash('success',"Félecitation Le compte Administrateur a été ajouté");
            return $this->get('security.authentication.guard_handler')->authenticateUserAndHandleSuccess(
                $USER,
                $request,
                $this->get('app.security.login_form_authenticator'),
                'main'
            );
        }
        return $this->render('Admin/AddAdmin.html.twig',[
            'UserForm' => $form->createView(),
            'Status' => 'Nouvel Administrateur',
            'UserHistory'=>["Vous n'avez pas encore d'historique"],
            'UserImage'=> '/'.$this->getParameter("images_directory").'/DefaultUser.png',
            'validation_groups' => ['Default', 'Registration'],
        ]);
    }
}
