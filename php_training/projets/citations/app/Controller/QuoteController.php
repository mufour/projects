<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Repository\QuoteRepository;

class QuoteController extends AbstractController
{
    public function index()
    {
        $quoteRepository = new QuoteRepository(\App\Database\PDOSingleton::getInstance());
        $quotes = $quoteRepository->findAll();

        dd($quotes);

        require ROOT_PATH . '/view/quote/list.php';
    }

    public function show($id)
    {
        echo 'Montrer les citations avec ID : ' . htmlspecialchars($id);
    }

    public function create()
    {
        echo 'Créer une nouvelle citation';
    }

    public function edit($id)
    {
        echo 'Modifier citation avec ID : '. htmlspecialchars($id);
    }

    public function delete($id)
    {
        echo 'Supprimer citation avec ID :'. htmlspecialchars($id);
    }
}
