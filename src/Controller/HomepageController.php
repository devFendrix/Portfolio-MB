<?php

Namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController{
    #[Route('/', name: 'homepage.index')]
    // Génère et renvoie la page d'accueil
    public function index(): Response
    {
        return $this->render("homepage/index.html.twig");
    }   
}