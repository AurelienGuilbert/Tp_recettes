<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/home.html.twig', [             
        ]);
    }
    /**
     * @Route("/recettes", name="recettes")
     */
    public function recettes(): Response
    {

        
        return $this->render('home/recettes.html.twig', [
            
        ]);
    }
    /**
     * @Route("/recettes/create", name="create")
     */
    public function create(): Response
    {
 
        return $this->render('home/create.html.twig', [
            
        ]);
    }
    
    
}
