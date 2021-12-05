<?php

// Reminder ------------------------------------------------------------------------------
// Start the server
// php -S 127.0.0.1:8000 -t public

// Create a new Controller
// symfony console make:controller MonController

// Create an Entity | result in "src/Entity/"
// To edit an entity use it too, it will detect if it already exists !
// php bin\console make:entity

// Migrate resulting modifications (Entities) to a php file | result in "migrations/Version20211113234302.php"
// php bin\console make:migration

// Update Database with previously migrated data
// php bin\console doctrine:migrations:migrate

// ---------------------------------------------------------------------------------------

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// ---------------------------------------------------------------------------------------

define('PAGE_PLANNING_ANNUEL', 'planningAnnuel.html.twig');

// ---------------------------------------------------------------------------------------
class PlanningAnnuelController extends AbstractController
{
    #[Route('/planningAnnuel/{user}')]
    function planningAnnuel($user): Response
    {
        $year = date("Y");
        $columns_header = [
            "N° Jour",
            "   ",
            "Janvier",
            "   ",
            "   ",
            "Fevrier",
            "   ",
            "   ",
            "Mars",
            "   ",
            "   ",
            "Avril",
            "   ",
            "   ",
            "Mai",
            "   ",
            "   ",
            "Juin",
            "   ",
            "   ",
            "Juillet",
            "   ",
            "   ",
            "Aout",
            "   ",
            "   ",
            "Septembre",
            "   ",
            "   ",
            "Octobre",
            "   ",
            "   ",
            "Novembre",
            "   ",
            "   ",
            "Decembre",
            "   "
        ];

        $schedule_content = array();

        for($i=1; $i<=31; $i++)
        {
            array_push($schedule_content,
                array($i, " "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ")
            );
        }


        return $this->render(PAGE_PLANNING_ANNUEL,
            [
                'year' => $year,
                'user' => ucwords(str_replace('-', ' ', $user)),
                'columns_header' => $columns_header,
                'schedule_content' => $schedule_content
            ]);
    }
}
