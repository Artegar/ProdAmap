<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NosProducteursController extends Controller
{
    /**
     * @Route("/nos/producteurs", name="nos_producteurs")
     */
    public function index()
    {
        return $this->render('nos_producteurs/nosProducteurs.html.twig', [
            'controller_name' => 'NosProducteursController',
        ]);
    }
}
