<?php

namespace App\Controller;

use App\Entity\AffectationMatiere;
use App\Form\AffectationMatiereType;
use App\Repository\AffectationMatiereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/affectation/matiere')]
class AffectationMatiereController extends AbstractController
{
    #[Route('/', name: 'affectation_matiere_index', methods: ['GET'])]
    public function index(AffectationMatiereRepository $affectationMatiereRepository): Response
    {
        return $this->render('affectation_matiere/index.html.twig', [
            'affectation_matieres' => $affectationMatiereRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'affectation_matiere_new', methods: ['GET','POST'])]
    public function new(Request $request): Response
    {
        $affectationMatiere = new AffectationMatiere();
        $form = $this->createForm(AffectationMatiereType::class, $affectationMatiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($affectationMatiere);
            $entityManager->flush();

            return $this->redirectToRoute('affectation_matiere_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('affectation_matiere/new.html.twig', [
            'affectation_matiere' => $affectationMatiere,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'affectation_matiere_show', methods: ['GET'])]
    public function show(AffectationMatiere $affectationMatiere): Response
    {
        return $this->render('affectation_matiere/show.html.twig', [
            'affectation_matiere' => $affectationMatiere,
        ]);
    }

    #[Route('/{id}/edit', name: 'affectation_matiere_edit', methods: ['GET','POST'])]
    public function edit(Request $request, AffectationMatiere $affectationMatiere): Response
    {
        $form = $this->createForm(AffectationMatiereType::class, $affectationMatiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('affectation_matiere_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('affectation_matiere/edit.html.twig', [
            'affectation_matiere' => $affectationMatiere,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'affectation_matiere_delete', methods: ['POST'])]
    public function delete(Request $request, AffectationMatiere $affectationMatiere): Response
    {
        if ($this->isCsrfTokenValid('delete'.$affectationMatiere->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($affectationMatiere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('affectation_matiere_index', [], Response::HTTP_SEE_OTHER);
    }
}
