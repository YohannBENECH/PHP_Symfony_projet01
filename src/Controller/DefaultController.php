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

        $header = array(
            "Lundi","Mardi","Mercredi", "Jeudi","Vendredi", "Samedi", "Dimanche"
        ); // En solide

        $schedule_content = array();

        //En mouvement

        $row = array(
            "mardi septembre 2017", "Accueil CMI", "4", "Sophie",
            "ANGLAIS", "3", "Daniel"
        );

        array_push($schedule_content, $row);

        return $this->render('semaine/affiche.html.twig',[
            'header' => $header,
            'schedule_content' => $schedule_content
        ]);
    }
}