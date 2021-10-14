<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

define('DEFAULT_PAGE', 'base.html.twig');
define('PAGE_AFFICHE', 'planningAnnuel.html.twig');

class DefaultController extends AbstractController
{

    function index(): Response
    {
        return new Response("TEST PAGE");
        //return $this->render(DEFAULT_PAGE, ['']);
    }

    function planningAnnuel($var): Response
    {
        return $this->render(PAGE_AFFICHE,
            [
                'title' => ucwords(str_replace('-', ' ', $var)),
                'title2' => 'POUALIKOUM !'
        ]);
    }
}