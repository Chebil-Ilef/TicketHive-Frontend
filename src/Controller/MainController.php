<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/main/createevent', name: 'main.create_event')]
    public function createEventPage(): Response
    {
        return $this->render('main/create.html.twig');
    }
}
