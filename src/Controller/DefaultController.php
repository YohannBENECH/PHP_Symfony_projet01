<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

define('PAGE_AFFICHE', 'creneau/affiche.html.twig');

class DefaultController extends AbstractController
{

    function index()
    {
        return $this->render(PAGE_AFFICHE, ['']);
    }

    function afficheSemaine(): Response
    {

        return $this->render('semaine/affiche.html.twig');
    }
}