<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspaceMembreController extends AbstractController
{
    /**
     * @Route("/espace", name="espace")
     */
    public function index(): Response
    {
        return $this->render('espace_membre/index.html.twig');
    }
}
