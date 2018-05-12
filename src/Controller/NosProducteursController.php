<?php

namespace App\Controller;
use App\Entity\producteurProfil;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class NosProducteursController extends Controller
{
    /**
     * @Route("/nosproducteurs", name="nos_producteurs")
     */
    public function index(): Response
    {
    			$utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->find($producteur);
             return $this->render('nos_producteurs/nosProducteurs.html.twig', ['utilisateurs' => $utilisateur]);

    }


}
