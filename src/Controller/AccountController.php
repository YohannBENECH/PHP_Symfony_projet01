<?php

namespace App\Controller;

use App\Entity\Account;
use App\Form\AccountFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("/compte/create", name="compte_create")
     */
    public function new(Request $request)
    {
        $account = new Account();
        $form = $this->createForm(AccountFormType::class, $account);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form ->isValid()){
            $account = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($account);
            $entityManager->flush();
            return $this->redirectToRoute('newIntervenant_success');
        }

        return $this->render('compte/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

}