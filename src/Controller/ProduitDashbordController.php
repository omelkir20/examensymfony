<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitDashbordController extends AbstractController
{
    #[Route('/produit/dashbord', name: 'app_produit_dashbord')]
    public function index(): Response
    {
        return $this->render('produit_dashbord/index.html.twig', [
            'controller_name' => 'ProduitDashbordController',
        ]);
    }
}
