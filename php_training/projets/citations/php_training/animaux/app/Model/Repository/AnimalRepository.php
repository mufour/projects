<?php

namespace App\Model\Repository;

use App\Model\Repository\AbstractRepository;

class AnimalRepository extends AbstractRepository
{
    protected string $table = 'animal';
    protected string $entity = 'Animal';
}