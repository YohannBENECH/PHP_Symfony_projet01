<?php

namespace App\Controller;

use App\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'api')]
    public function index(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }
    /**
     * @Route("/api/{id}/edit", name="api_event_edit", methods={"PUT"})
     **/
    public function majEvent(?Cours $calendar, Request $request) : Response
    {
        //On récupere les données
        $donnees = json_decode($request->getContent());

        if (
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->end) && !empty($donnees->end) &&
            isset($donnees->backgroundColor) && !empty($donnees->backgroundColor) &&
            isset($donnees->borderColor) && !empty($donnees->borderColor) &&
            isset($donnees->textColor) && !empty($donnees->textColor)
        ) {
            //Les donnees sont completes
            $code = 200;
            if (!$calendar) {
                //On instancie un rendez-vous
                $calendar = new Cours;
                //On change le code
                $code = 201;
            }

            //On hydrate l'objet avec les donnees
            $calendar->setDescription($donnees->title);
            $calendar->setStart(new \DateTime($donnees->start));
            $calendar->setEnd(new \DateTime ($donnees->end));
            $calendar->setBackgroundColor($donnees->backgroundColor);
            $calendar->setBorderColor($donnees->borderColor);
            $calendar->setTextColor($donnees->textColor);

            $em = $this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();

            return new Response('Ok', $code);
        }
        else{
            //Les donnees sont imcompletes
            return new Response('Donnees imcompletes', 404);
        }

    }
}
