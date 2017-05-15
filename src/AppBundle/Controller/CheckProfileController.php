<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CheckProfileController extends Controller
{
    /**
     * @Route("/User/{id}", name="user_profile")
     */
    public  function getUserProfile(Request $request, Utilisateur $user){
        $cursrc = '/'.$this->getParameter("images_directory").'/'.$user->getPhoto();
        $imgdirectory ='/'.$this->getParameter("images_directory").'/';
        $CARS = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAllTicketsOfOne($user);
        return $this->render('default/CheckProfile.html.twig',[
            'user'=> $user,
            'userProfilePic' =>$cursrc,
            'userCars' =>$CARS,
            'imgsource' => $imgdirectory,
        ]);
    }
    /**
     * @Route("/User/{id}/remove", name="user_profile_remove")
     */

    public function deleteUserProfile(Request $request, Utilisateur $user){
        $this->denyAccessUnlessGranted('ROLE_OWN',$user);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
    }
    /**
     * @Route("/MyProfile", name="my_profile")
     */
    public  function getProfile(Request $request){
        $user = $this->get('security.token_storage')
            ->getToken()
            ->getUser();
        $cursrc = '/'.$this->getParameter("images_directory").'/'.$user->getPhoto();
        $imgdirectory ='/'.$this->getParameter("images_directory").'/';
        $CARS = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAllTicketsOfOne($user);
        return $this->render('default/CheckProfile.html.twig',[
            'user'=> $user,
            'userProfilePic' =>$cursrc,
            'userCars' =>$CARS,
            'imgsource' => $imgdirectory,
        ]);
    }
}
