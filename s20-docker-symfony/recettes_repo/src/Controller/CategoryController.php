<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Demo;
use App\Form\RecetteType;
use App\Entity\Recipe;
use App\Repository\CategoryRepository;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Dom\Entity;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\Required;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;


class CategoryController extends AbstractController
{
    #[Route('/category', name: 'category.index')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(CategoryRepository $repository): Response
    {
          $categories = $repository->findAllWithCount();
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    //  #[Route('/recettes', name: 'recipe.index')]
    // public function index(Request $request, RecipeRepository $repository, EntityManagerInterface $em, CategoryRepository $categoryRepository): Response
    // {
    //     return $this->render('recipe/index.html.twig', [
    //         'recipes' => $recipes
    //     ]);
    // }

        #[Route('/category/{slug}-{id}', name: 'category.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, string $slug, int $id, RecipeRepository $repository): Response
    {
        $category = $repository->find($id);
        if ($category->getSlug() !== $slug) {
            return $this->redirectToRoute('category.show', [
                'slug' => $category->getSlug(),
                'id' => $id
            ], 301);
        }
        return $this->render('category/index.html.twig', [
            'category' => $repository->finAllWithCount()
        ]);
    }

     #[Route('/category/create', name: 'category.create')]
    public function create(Request $request, EntityManagerInterface $em)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $category->setCreatedAt(new \DateTimeImmutable());
            $category->setUpdatedAt(new \DateTimeImmutable());
            $em->persist($category);
            $em->flush();
            $this->addFlash('success', 'La catégorie a bien été créée');
            return $this->redirectToRoute('category.index');
        }
        return $this->render('category/create.html.twig', [
            'form' => $form,
        ]);
    }



    #[Route('/category/{id}/edit', name: 'category.edit', methods: ['GET', 'POST'])]
    public function edit(Category $category, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $category->setUpdatedAt(new \DateTimeImmutable());
            $this->addFlash('success', 'La catégorie de recette a bien été modifiée');
            return $this->redirectToRoute('category.index');
        }
        return $this->render('category/edit.html.twig', [
            'category' => $category,
            'form' => $form
        ]);
    }

    #[Route('/{id}', name: 'delete', requirements: ['id' => Requirement::DIGITS], methods: ['DELETE'])]
    public function delete(Category $category, EntityManagerInterface $em)
    {
        $em->remove($category);
        $em->flush();
        $this->addFlash('success', 'La catégorie de recette a bien été supprimée');
            return $this->redirectToRoute('category.index');
    }

}