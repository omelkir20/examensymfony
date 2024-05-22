<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitListController extends AbstractController
{
    #[Route('/produit/list', name: 'app_produit_list')]
    public function index(): Response
    {
        return $this->render('produit_list/index.html.twig', [
            'controller_name' => 'ProduitListController',
        ]);
    }
}
