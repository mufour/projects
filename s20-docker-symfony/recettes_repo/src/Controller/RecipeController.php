<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecipeController extends AbstractController
{
    #[Route('/recettes', name: 'recipe.index')]
    public function index(Request $request, RecipeRepository $repository): Response
    {
        $recipes = $repository->findWithLowDuration(10); 
        return $this->render('recipe/index.html.twig', [
            'recipes'=> $recipes
        ]);
    }

    #[Route('/recettes/{slug}-{id}', name: 'recipe.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id, RecipeRepository $repository): Response
    {
        $recipe = $repository->find($id);
        if ($recipe->getSlug() !== $slug) {
            return $this->redirectToRoute('recipe.show', [
                'slug' => $recipe->getSlug(),
                'id' => $id
            ], 301);
        }
        return $this->render('recipe/show.html.twig', [
           'recipe'=> $recipe,
        ]);
    }
}
