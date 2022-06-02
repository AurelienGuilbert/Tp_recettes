<?php

namespace App\Controller;

use App\Entity\Recettes;
use App\Repository\RecettesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;

class RequestController extends AbstractController
{
     /**
     * @Route("/get-recipes", name="getRecipes")
     */
    public function getRecipes(Request $request, RecettesRepository $recettesRepository) 
    {
        // find all references in DB
        $recettes = $recettesRepository->findAll();

        // Make it an array, then JSON
        $response = array();
        foreach($recettes as $item) {
            $response[] = array(
                'id' => $item->getId(),
                'name' => $item->getName(),
                'duration' => $item->getDuration(),
                'difficulty' => $item->getDifficulty(),
                'ingredients' => $item->getIngredients(),
            );
        }
        return new JsonResponse($response);
    }
     /**
     * @Route("/post-recipes", name="postRecipes")
     */
    public function postRecipes(Request $request,ManagerRegistry $doctrine, RecettesRepository $recettesRepository) 
    {
        // handle request JSON
        $data = $request->getContent();

        // decode json to php variable
        $data2 = json_decode($data, true);
        
        // decompose each variable
        $name = $data2['name'];
        $duration = $data2['duration'];
        $difficulty = $data2['difficulty'];
        $ingredients = $data2['ingredients'];
        
        // implement DB
        $newRecipe = new Recettes();
        $newRecipe->setName($name);
        $newRecipe->setDuration($duration);
        $newRecipe->setDifficulty($difficulty);
        $newRecipe->setIngredients($ingredients);
        $doctrine->getManager()->persist($newRecipe);
        $doctrine->getManager()->flush();

        return $this->json($data2);
    }
}
