<?php
// Reminder ------------------------------------------------------------------------------
// Start the server
// php -S 127.0.0.1:8000 -t public

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


define('DEFAULT_PAGE', 'base.html.twig');
define('PAGE_PLANNING_ANNUEL', 'planningAnnuel.html.twig');

class DefaultController extends AbstractController
{

    function index(): Response
    {
        return new Response("TEST PAGE");
        //return $this->render(DEFAULT_PAGE, ['']);
    }

    function bissextile($year) {
        if( (is_int($year/4) && !is_int($year/100)) || is_int($year/400)) {
            // Année bissextile
            // vous remplacez le retour par ce que vou voulez
            return TRUE;
        } else {
            // Année NON bissextile
            // vous remplacez le retour par ce que vou voulez
            return FALSE;
        }
    }

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


        // DAYS COLUMN


        return $this->render(PAGE_PLANNING_ANNUEL,
            [
                'year' => $year,
                'user' => ucwords(str_replace('-', ' ', $user)),
                'columns_header' => $columns_header,
                'schedule_content' => $schedule_content
        ]);
    }
}