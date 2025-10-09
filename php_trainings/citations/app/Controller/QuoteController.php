<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database\PDOSingleton;
use App\Model\Repository\QuoteRepository;
use App\Model\Repository\AuthorRepository;

class QuoteController extends AbstractController
{
    public function index()
    {
        $quoteRepo = new QuoteRepository(PDOSingleton::getInstance());
        $quotes = $quoteRepo->findAll();
        $this->render('/quote/list', $quotes);
        require ROOT_PATH . '/view/quote/list.php';
    }

    public function add()
    {
        $authorRepo = new AuthorRepository(PDOSingleton::getInstance());
        $authors = $authorRepo->findAll();
        $this->render('quote/add', $authors);
    }

    public function delete($id)
    {
        $quoteRepo = new QuoteRepository(PDOSingleton::getInstance());
        if ($quoteRepo->delete((int) $id)) {
            $this->addFlash('Votre citation a bien été supprimé', AbstractController::SUCCESS);
            $this->redirect('/quotes');
        }
    }

    // public function show($id)
    // {
    //     echo 'Montrer les citations avec ID : ' . htmlspecialchars($id);
    // }

    // public function create()
    // {
    //     echo 'Créer une nouvelle citation';
    // }

    // public function edit($id)
    // {
    //     echo 'Modifier citation avec ID : ' . htmlspecialchars($id);
    // }
}
