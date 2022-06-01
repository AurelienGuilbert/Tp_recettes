<?php

namespace App\Controller;

use App\Repository\RecettesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class RequestController extends AbstractController
{
     /**
     * @Route("/get-student-list", name="getStudentList")
     */
    public function getStudentList(Request $request) 
    {
        $studentList = [
            'Pierre',
            'Sophie',
            'Lucy',
            'Marc',
            'Nicolas'
        ];
        return new JsonResponse($studentList);
    }
     /**
     * @Route("/get-recipies", name="getRecipies")
     */
    public function getRecipies(Request $request, RecettesRepository $recettesRepository) 
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
        // var_dump($arrayCollection);
        // return new JsonResponse($recettes);
        return new JsonResponse($response);
    }
}
