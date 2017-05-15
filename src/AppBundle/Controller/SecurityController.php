<?php

namespace AppBundle\Controller;

use AppBundle\Form\LoginForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="secure_login")
     */
    public function UserLogin()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class,[
            '_username' =>$lastUsername,
        ]);

        return $this->render('security/login.html.twig', array(
            'loginform' => $form->createView(),
            'error'         => $error,
        ));
    }

    /**
     * @Route("/logout", name="secure_logout")
     */

    public function UserLogout(){
        $this->addFlash('success',"Vous avez été déconnecté");
        throw new \Exception('vous ne devez pas être ici');
    }
}
