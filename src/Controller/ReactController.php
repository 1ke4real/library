<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReactController extends AbstractController
{
    #[Route(path: '/{route}', name: 'react', requirements: ['route' => '.*'])]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
