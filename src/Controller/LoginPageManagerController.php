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

class LoginPageManagerController extends AbstractController
{
    #[Route('/login/page/manager', name: 'login_page_manager')]
    public function index(): Response
    {
        return $this->render('login_page_manager/index.html.twig', [
            'controller_name' => 'LoginPageManagerController',
        ]);
    }
}
