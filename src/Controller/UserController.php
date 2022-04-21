<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Affichage et modification des informations users
 *
 * @Route("/profil")
 */

class UserController extends AbstractController
{
    /**
     * Affichage profil
     *
     * @Route ("/{id}", name="user_profile", requirements={"id": "\d+"})
     */
}