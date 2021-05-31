<?php

Namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route('/project')]

class ProjectController extends AbstractController{

    #[Route('/', name: 'project.index')]
    // Génère et renvoie la page d'index de mes projets
    public function index(): Response
    {
        return $this->render("project/index.html.twig");
    }   

    #[Route('/ppe1', name:'project.ppe1')]
    // Génère et renvoie la page de documentation du ppe1
    public function ppe1(): Response
    {
        return $this->render("project/ppe1.html.twig");
    }

    #[Route('/ppe3', name:'project.ppe3')]
    // Génère et renvoie la page de documentation du ppe3
    public function ppe3(): Response
    {
        return $this->render("project/ppe3.html.twig");
    }

    #[Route('/ppe4', name:'project.ppe4')]
    // Génère et renvoie la page de documentation du ppe4
    public function ppe4(): Response
    {
        return $this->render("project/ppe4.html.twig");
    }

}