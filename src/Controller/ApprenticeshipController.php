<?php

Namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ApprenticeshipController extends AbstractController{
    #[Route('/apprenticeship', name: 'apprenticeship.index')]
    // Génère et renvoie la page d'index de mon apprentissage
    public function index(): Response
    {
        return $this->render("apprenticeship/index.html.twig");
    }   
}