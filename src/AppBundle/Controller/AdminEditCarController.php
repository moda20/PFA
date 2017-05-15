<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminEditCarController extends Controller
{
    /**
     * @Route("/Admin/CarsList", name="car_list")
     */
    public function GetCarList(Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $CARS = $this->getDoctrine()
            ->getRepository('AppBundle:Voiture')
            ->getAllAlphabetic();
        return $this->render('Admin/Cars.html.twig', [
            'Cars' => $CARS,
        ]);
    }

    /**
     * @Route("/Admin/Car/{id}/delete", name="delete_car")
     */
    public function DeleteCar(Request $request, Voiture $CAR){
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
            $em = $this->getDoctrine()->getManager();
            $em->remove($CAR);
            $em->flush();
            return $this->redirectToRoute("car_list");
    }
}
