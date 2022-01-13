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

// Create CRUD on Entity (You ll have to precise the name)
// symfony console make:crud

// Update Database (force)
// php bin/console d:s:u --force

// ---------------------------------------------------------------------------------------

namespace App\Controller;

use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// ---------------------------------------------------------------------------------------

define('PAGE_PLANNING_ANNUEL', 'planningAnnuel.html.twig');

// ---------------------------------------------------------------------------------------
class PlanningAnnuelController extends AbstractController
{
    #[Route('/planningAnnuel/{user}')]
    function planningAnnuel($user, CoursRepository $cours): Response
    {
        $year = date("Y");
        $events = $cours->findAll();
        // dd($events); // Test

        foreach ($events as $curseur_event){
            $rdvs[] = [
                'id' => $curseur_event->getId(),
                'matiere_id' => $curseur_event->getMatiereId(),
                'intervenant_id' => $curseur_event->getIntervenantId(),
                'background_color' => $curseur_event->getBackgroundColor(),
                'text_color' => $curseur_event->getTextColor(),
                'title' => $curseur_event->getDescription(),
                'start' => $curseur_event->getStart()->format('Y-m-d H:i:s'),
                'end' => $curseur_event->getEnd()->format('Y-m-d H:i:s')
            ];
        }

        $data = json_encode($rdvs);

        //dd(compact('data'));

        return $this->render(PAGE_PLANNING_ANNUEL,
            compact('data')
            /*[
                'data' => compact('data'),
                'year' => $year,
                'user' => ucwords(str_replace('-', ' ', $user))
            ]*/);
    }
}
