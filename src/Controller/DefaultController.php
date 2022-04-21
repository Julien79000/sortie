<?php

namespace App\Controller;


use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Gère les pages type "divers"
 *
 * Class DefaultController
 * @package App/Controller
 *
 */

class DefaultController extends AbstractController
{
    /**
     * Page d'accueil
     *
     * @Route ("/", name="home")
     */

    public function home()
    {
        //récupérer toutes les sorties
        $eventRepo = $this->getDoctrine()->getRepository(Event::class);
        //sans filtre avec []
        $allEventCount = $eventRepo->count([]);

        return $this->render('default/home.html.twig', [
            "allEventCount" => $allEventCount,
        ]);
    }
}
