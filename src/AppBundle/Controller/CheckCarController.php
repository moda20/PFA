<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Voiture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CheckCarController extends Controller
{


    /**
     * @Route("/Car/{id}", name="check_car")
     */
    public function getCar(Request $request, Voiture $car){
        $cursrc = '/'.$this->getParameter("images_directory").'/';
        return $this->render('default/CheckCar.html.twig', [
            'car' => $car,
            'Carimg'=> $cursrc.$car->getPhoto(),
            'cursrc' =>$cursrc,
        ]);
    }

    /**
     * @Route("/Car/{id}/delete", name="user_car_delete")
     */
    public function deleteCar(Request $request, Voiture $car){
        $this->denyAccessUnlessGranted('ROLE_OWN',$car);
        $em = $this->getDoctrine()->getManager();
        $em->remove($car);
        $em->flush();
    }
}
