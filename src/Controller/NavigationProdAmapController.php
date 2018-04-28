<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationProdAmapController extends Controller
{
    /**
     * @Route("/navigation/prod/amap", name="navigation_prod_amap")
     */
    public function index()
    {
        return $this->render('navigation_prod_amap/navigation.html.twig', [
            'controller_name' => 'NavigationProdAmapController',
        ]);
    }
}
