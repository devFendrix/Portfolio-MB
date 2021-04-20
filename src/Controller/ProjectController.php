<?php

Namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProjectController extends AbstractController{

    #[Route('/project', name: 'project.index')]
    // Génère et renvoie la page d'index de mes projets
    public function index(): Response
    {
        return $this->render("project/index.html.twig");
    }   

}