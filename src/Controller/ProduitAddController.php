<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitAddController extends AbstractController
{
    #[Route('/produit/add', name: 'app_produit_add')]
    public function index(): Response
    {
        return $this->render('produit_add/index.html.twig', [
            'controller_name' => 'ProduitAddController',
        ]);
    }
}
