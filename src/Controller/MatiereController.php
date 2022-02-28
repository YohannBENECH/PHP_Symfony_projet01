<?php

namespace App\Controller;

use App\Entity\Matiere;
use App\Form\MatiereType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatiereController extends AbstractController
{
    /**
     * @Route("/matiere/create", name="matiere_create")
     */
    public function new(Request $request)
    {
        $matiere = new Matiere();
        $form = $this->createForm(MatiereType::class, $matiere);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form ->isValid()){
            $matiere = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($matiere);
            $entityManager->flush();
            return $this->redirectToRoute('newMatiere_success');
        }

        return $this->render('matiere/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}