<?php

namespace App\Controller;

use App\Demo;
use App\Form\RecetteType;
use App\Entity\Recipe;
use App\Repository\CategoryRepository;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Dom\Entity;
use Proxies\__CG__\App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RecipeController extends AbstractController
{
    #[Route('/demo')]
    public function demo(Demo $demo)
    {
        dd($demo);
    }

    #[Route('/recettes', name: 'recipe.index')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(Request $request, RecipeRepository $repository, EntityManagerInterface $em, CategoryRepository $categoryRepository): Response
    {

        // $this->denyAccessUnlessGranted('ROLE_USER');
        
        // Afficher les recettes de la catégorie plats-italiens
        // $plaPrincipal = $categoryRepository->findOneBy(['slug' => 'plats-italiens']);
        // $plaPrincipal = $categoryRepository->findOneBy(['slug' => 'plats-italiens']);
        // dd($plaPrincipal);

        // Essayer de créer une catégorie à la volée, sans l'inscrire dans la BDD, grâce au cascade: ['persist'] dans Recipe
        // $category = (new Category())
        // ->setUpdatedAt(new \DateTimeImmutable())
        // ->setCreatedAt(new \DateTimeImmutable())
        // ->setTitle('tacos')
        // ->setSlug('tacos');
        // $recipes[4]->setCategory($category);
        // $em->flush();
        
        $page = $request->query->getInt('page', 1);
        $limit = 2;
        $recipes = $repository->paginateRecipes($page);
        return $this->render('recipe/index.html.twig', [
            'recipes' => $recipes,
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
            'recipe' => $recipe,
        ]);
    }

    #[Route('/recettes/{id}/edit', name: 'recipe.edit', methods: ['GET', 'POST'])]
    public function edit(Recipe $recipe, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(RecetteType::class, $recipe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $recipe->setUpdatedAt(new \DateTimeImmutable());
            $this->addFlash('success', 'La recette a bien été modifiée');
            return $this->redirectToRoute('recipe.index');
        }
        return $this->render('recipe/edit.html.twig', [
            'recipe' => $recipe,
            'form' => $form
        ]);
    }

    #[Route('/recettes/create', name: 'recipe.create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $recipe = new Recipe();
        $form = $this->createForm(RecetteType::class, $recipe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $recipe->setCreatedAt(new \DateTimeImmutable());
            $recipe->setUpdatedAt(new \DateTimeImmutable());
            $em->persist($recipe);
            $em->flush();
            $this->addFlash('success', 'La recette a bien été créée');
            return $this->redirectToRoute('recipe.index');
        }
        return $this->render('recipe/create.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/recettes/{id}/edit', name: 'recipe.delete', methods: ['DELETE'])]
    public function delete(Recipe $recipe, EntityManagerInterface $em)
    {
        $em->remove($recipe);
        $em->flush();
        $this->addFlash('success', 'La recette a bien été supprimée');
        return $this->redirectToRoute('recipe.index');
    }
}


        // METHODE POUR AJOUTER UNE RECETTE + GARDER EN BDD (persist)

        //         $recipe = new Recipe();
        //         $recipe->setTitle('Recette : “Le Ragoût de Rêves à la Marley”');
        //         $recipe->setSlug('ragout-marley');
        //         $recipe->setDescription('“Dans le grand livre des âmes, certaines pages sentent le thym et le soleil.
        // D’autres vibrent au rythme d’une basse qui fait danser les épices.”');
        //         $recipe->setContent('Allume un peu de musique.
        // Bob Marley, “Stir It Up” de préférence — c’est le tempo parfait pour faire revenir les souvenirs.

        // Dans une casserole, fais dorer les mots que tu n’as jamais osé dire.
        // Laisse-les caraméliser doucement dans l’huile de coco.

        // Ajoute le riz et les fragments de papier — qu’ils absorbent ensemble le goût du pardon.

        // Verse une larme d’eau claire (ou de rhum ambré, si ton cœur le permet).

        // Laisse mijoter à feu doux, en lisant à voix haute le passage qui t’a rendu plus humain.');
        //         $recipe->setDuration(45);
        //         $recipe->setCreatedAt(new \DateTimeImmutable());
        //         $recipe->setUpdatedAt(new \DateTimeImmutable());
        //         $em->persist($recipe);

        // METHODE POUR MODIFIER UNE RECETTE + GARDER EN BDD (flush)

        // $recipes[0]->setTitle('Pâtes à la Sauce Beauleauniaise');
        // $em->flush();

        // METHODE POUR SUPPRIMER UNE RECETTE + GARDER EN BDD (remove, flush)

        // $em->remove($recipes)[2];
        // $em->flush();