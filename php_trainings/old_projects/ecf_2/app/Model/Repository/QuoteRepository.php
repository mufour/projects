<?php

namespace App\Model\Repository;

use App\Model\Repository\AbstractRepository;

class QuoteRepository extends AbstractRepository
{
    protected string $table = 'quote';
    protected string $entity = 'QuoteEntity';
}
