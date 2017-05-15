<?php
/**
 * Created by PhpStorm.
 * User: jaxle
 * Date: 3/23/2017
 * Time: 10:53 AM
 */

namespace AppBundle\Security;


use AppBundle\Form\LoginForm;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{

    private $formFactory;

    private $em;

    private $router;

    private $userPasswordEncoder;
    public $username;

    public function __construct(FormFactoryInterface $formFactory, EntityManager $em, RouterInterface $router, UserPasswordEncoder $userPasswordEncoder)
    {
        $this->formFactory = $formFactory;
        $this->em = $em;
        $this->router = $router;
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    public function getCredentials(Request $request)
    {
        $isLoginSubmit = $request->getPathInfo() =='/login' && $request->isMethod('POST');
        if(!$isLoginSubmit){
            return null;
        }

        $form=$this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);
        $data =$form->getData();
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $data['_username']
        );
        return $data;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username =$credentials['_username'];
        $this->username=$username;
        return $this->em->getRepository('AppBundle:Utilisateur')->findOneBy(['Username'=>$username]);
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        $password =$credentials['_password'];
/*        if ($user->getPassword()!= $password){
            return false;
        }*/


        if ($this->userPasswordEncoder->isPasswordValid($user, $password)){
            return true;
        }

        return false;
    }

    protected function getLoginUrl()
    {
        return $this->router->generate('secure_login');
    }

    protected function getDefaultSuccessRedirectUrl(){

        return $this->router->generate('Home_page');
    }
}