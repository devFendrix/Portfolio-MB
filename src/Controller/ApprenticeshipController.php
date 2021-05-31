<?php

Namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route('/apprenticeship')]

class ApprenticeshipController extends AbstractController{
    #[Route('/', name: 'apprenticeship.index')]
    // Génère et renvoie la page d'index de mon apprentissage
    public function index(): Response
    {
        return $this->render("apprenticeship/index.html.twig");
    }
    
    #[Route('/rating', name: 'apprenticeship.rating')]
    // Génère et renvoie la page présentant les avis clients de Playin by Magic Bazar
    public function rating(): Response
    {
        return $this->render("apprenticeship/rating.html.twig");
    } 

    #[Route('/rework', name: 'apprenticeship.rework')]
    // Génère et renvoie la page présentant la refonte du panier version mobile de Playin by Magic Bazar
    public function rework(): Response
    {
        return $this->render("apprenticeship/rework.html.twig");
    }

    #[Route('/innovation', name: 'apprenticeship.innovation')]
    // Génère et renvoie la page présentant la veille technologie
    public function innovation(): Response
    {
        return $this->render("apprenticeship/innovation.html.twig");
    }
}