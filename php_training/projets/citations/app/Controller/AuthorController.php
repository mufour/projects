<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Repository\AuthorRepository;
use \App\Model\RepositoryAuthorRepository;
class AuthorController extends AbstractController
{
    public function index()
    {
        $author = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $authors = $author->findAll();
        $this->render('author/list', ['authors' => $authors]);
    }
}
