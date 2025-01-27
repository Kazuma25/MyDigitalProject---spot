<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreeterController extends AbstractController
{
    #[Route('/greeter', name: 'app_greeter')]
    public function index(): Response
    {
        return $this->render('greeter/index.html.twig', [
            'controller_name' => 'GreeterController',
        ]);
    }

    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }
}
