<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FicheTech;
use AppBundle\Form\NewTechSheetForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewTechSheetController extends Controller
{

    /**
     * @Route("/newSheet", name="new_sheet")
     */
    public function NewTechSheetController(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $form = $this->createForm(NewTechSheetForm::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $TS= $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($TS);
            $em->flush();
            $this->addFlash('success',"Fiche Technique crée.");
            return $this->redirectToRoute("Home_page");
        }
        return $this->render('User/AddTechSheet.html.twig',[
            'newTSform' => $form->createView()
        ]);
    }
    /**
     * @Route("/Sheet/{id}/edit",  name="user_edit_sheet")
     */
    public function EditTechSheetController(Request $request, FicheTech $TS)
    {
        $this->denyAccessUnlessGranted('ROLE_OWN', $TS);
        $form = $this->createForm(NewTechSheetForm::class,$TS);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $TS= $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($TS);
            $em->flush();
            $this->addFlash('success',"Fiche Technique modifiée");
            return $this->redirectToRoute("Home_page");
        }
        return $this->render('User/EditTechSheet.html.twig',[
            'newTSform' => $form->createView()
        ]);
    }
}
