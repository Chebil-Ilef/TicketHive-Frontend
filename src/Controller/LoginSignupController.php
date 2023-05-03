<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginSignupController extends AbstractController
{
    #[Route('/loginsignup', name: 'login_signup')]
    public function index(): Response
    {
        return $this->render('login_signup/index.html.twig');
    }
}
