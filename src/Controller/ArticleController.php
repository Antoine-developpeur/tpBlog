<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{id}', name: 'app_article')]
    public function index(string $id): Response
    {
        return $this->render('article/index.html.twig', [
            'id' => $id,
        ]);
    }
}
