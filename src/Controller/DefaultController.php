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

use App\Entity\Intervenant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// ---------------------------------------------------------------------------------------

define('DEFAULT_PAGE', 'base.html.twig');

// ---------------------------------------------------------------------------------------
class DefaultController extends AbstractController
{

    function index(): Response
    {
        return new Response("TEST PAGE");
        //return $this->render(DEFAULT_PAGE, ['']);
    }

    // Return True if it is
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


}