<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewCarrCompareController extends Controller
{

    /**
     *
     * @Route("/Compare", name="user_car_compare")
     */
    public function Compare (Request $request)
    {

            $data = $request->query->all();
            dump($data);
            $carId = $data["carID"];
            $price = $data["prix"] != 'N'? true: false ;
            $commdate = $data["DC"] !="N"? true:false;
            $args =["DC" => $commdate,"prix" =>$price];
            $target = $this->getDoctrine()->getRepository("AppBundle:Annonce")->find($carId);
            $tickets = $this->getDoctrine()->getRepository("AppBundle:Annonce")->getallinrange($target,$args);
            dump($tickets);
            return $this->render("User/NewCarCompare.html.twig", [
                'tickets' => $tickets,
            ]);

    }
}
