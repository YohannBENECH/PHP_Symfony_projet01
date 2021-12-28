<?php

namespace App\Controller;

use App\Entity\Account;
use App\Form\AccountFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("/compte/create", name="compte_create")
     */
    public function new()
    {
        $article = new Account();
        $form = $this->createForm(AccountFormType::class, $article);

        return $this->render('compte/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    // ...
}