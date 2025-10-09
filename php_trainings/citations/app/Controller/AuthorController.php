<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Repository\AuthorRepository;
use \App\Model\RepositoryAuthorRepository;

class AuthorController extends AbstractController
{
    public function __construct()
    {
        $this->accessValidator();
    }
    
    public function index()
    {
        $author = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $authors = $author->findAll();
        $this->render('author/list', ['authors' => $authors]);
    }

    public function show($id)
    {
        $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $author = $authorRepo->find($id);
        $this->render('author/show', ['author' => $author]);
    }

    public function add()
    {
        //Traitement du formulaire
        if (isset($_POST['author'], $_POST['biography'])) {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                unset($_SESSION['csrf_token']);
                $this->addFlash('f*** off b*tch', AbstractController::DANGER);
                $this->redirect('/authors/add');
            }
            $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
            $author = [
                'author' => strip_tags($_POST['author']),
                'biography' => $_POST['biography'],
            ];
            $authorEntity = $authorRepo->create($author);
            if ($authorEntity) {
                //Affichage du formulaire
                $this->addFlash('L\'auteur a bien été ajouté',);
                $this->redirect('/authors');
            }
        }
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $csrfToken;
        $this->render('/author/add');
    }

    public function delete(int $id)
    {
        $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        if ($authorRepo->delete($id)) {
            $this->addFlash('Votre auteur a bien été supprimé', AbstractController::SUCCESS);
            $this->redirect('/authors');
        }
    }

    public function jsonAll()
    {
        $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $authors = $authorRepo->findAll();
        $data = [];
        foreach ($authors as $author) {
            $roww = [
                'id' => $author->getId(),
                'author' => $author->getAuthor(),
                'image' => $author->getImage(),
                'biography' => $author->getBiography(),
                'created_at' => $author->null,
                'updated_at' => $author->null,
            ];
            $data[] = $roww;
        }
      $this->jsonResponse($data);
    }
}
