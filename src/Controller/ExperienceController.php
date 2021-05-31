<?php

Namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route('/experience')]

class ExperienceController extends AbstractController{
    #[Route('/', name: 'experience.index')]
    // Génère et renvoie la page d'index des mes expériences professionnels
    public function index(): Response
    {
        return $this->render("experience/index.html.twig");
    }   
}