<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteProfileController extends Controller
{

    public function execute(Request $request, Utilisateur $user,InputInterface $input, OutputInterface $output) {
        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion('Continue with this action?', false);

        if (!$helper->ask($input, $output, $question)) {
            return;
        }
    }
}
