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


class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
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