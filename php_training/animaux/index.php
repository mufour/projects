<?php

require_once 'vendor/autoload.php';

use App\Model\Entity\Animal;
use App\Model\Entity\Espece;
use App\Model\Entity\AbstractEntity;

$entity = new Animal();
$entity->hydrate([
    'id' => 1,
    'nom' => 'Rex'
]);

echo '<pre>';
var_dump($entity);
echo '/<pre>';