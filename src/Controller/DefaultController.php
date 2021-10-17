<?php
// Start the server
// php -S 127.0.0.1:8000 -t public

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

        $schedule_content = array(
            // Day number
            array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"),

            // Day label
            array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"),

            // Month content
            array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"),

            // Hour count
            array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31")

        );




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