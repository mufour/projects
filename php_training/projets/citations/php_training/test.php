<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <h2>This is my first php test</h2>
    <p>this is a success, well done <?php echo "Raoul le bg"; // j'apprends à documenter mon fichier ?></p>
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s');  // cette ligne donne l'heure, bon, pas de Paris mais c'est classe !?>.</p> 

<?php
$userAge = 17; // La variable est créée et vaut 17
$userAge = 23; // La variable est modifiée et vaut 23
$userAge = 55; // La variable est modifiée et vaut 55
?>

<?php
$fullname = "Mathieu Grimbert";
$email = 'mathieu.gr1bR@orange.fr';
?>

<?php
$price = 57.3;
?>

<?php
$isAuthor = false;
$isAdministrator = false;
?>

<?php
$noValue = NULL;
?>

<p><?php
$fullname = "Raoul le BG";
echo "Bonjour {$fullname}, quel honeur d'être votre interlocuteur !";
?></p>

<p><?php
$number = 4 + 2;
$number = 3 * 2;
$number = 12 / 2;
$number = 8 - 2;
$number = 10 % 3;
echo $number;
?></p>

<p><?php
$amIBeauGosse = "george"; // La condition d'accès

if ($amIBeauGosse === "oui") {
    echo "Vous êtes autorisé à me faire la cour";
} 
elseif ($amIBeauGosse === "non") {
    echo "Vous n'êtes pas autorisé à me faire la cour";
}
else {
    echo "Vous n'êtes qu'un urluberlu, allez donc manger du merlu ! ou vous faire cuire le ...";
}
?></p>

<p><?php
$isAllowedToEnter = true;

if ($isAllowedToEnter) {
    echo "WTTJ";
}
else {
    echo "You're on the Highway to hell brada !";
}
?></p>

<p><?php
$isAllowedToEnter = true;

if (! $isAllowedToEnter) { // c'est la même chose qu'au dessus -> "!" <- inverse de "==="
    echo "You're on the Highway to hell brada !";
}
else {
    echo "WTTJ";
}
?></p>


<p><?php
$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if (($isEnabled && $isOwner) || $isAdmin) {
    echo "Tu remplis au moins 1 condition nécessaire";
} else {
    echo "gtfo";
}
?></p>

<?php
$grade = 51;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "vraiment nul !";
    break;
    
    case 1: 
        echo "vraiment pas ouf";
    break;
    
    case 2:
        echo "pas ouf";
    break;
    
    case 3: // etc. etc.
        echo "peux mieux faire";
    break;
    
    case 4:
        echo "t'es un ouf !";
    break;
    
    case 5:
        echo "tu es vraiment ouf";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note, à mon avis tu ne sais pas écrire nulos";
}
?>

<p><?php
$userAge = 24;
$isAdult = ($userAge >= 18);
?></p>

<p><?php

$user1 = ['Raoul el guapito', 'raoul_dc_linkedin', 'S3cr3t', 35, 'enfin presque'];

echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34
echo $user1[4]; // "enfin presque"
?>
</p>

<p>
    <?php
    $raoul = ['Raoul', 'très bg', 34, 'bordeaux', 'grand', 'gaucher'];
    $lucie = ['Lucie', 'giga bg', 36, 'sainte-eulalie', 'petite', 'droitiere'];

    $users = [$raoul, $lucie];

    echo $users [0][3];
    echo $users [1][3];
    ?>
</p>

<p>
    <?php
$lines = 1;

while ($lines <= 11) {
    echo 'Ajoute 1 joueur \o/ pour faire une équipe de foot : joueur numéro ' . $lines .'<br />';
    $lines++;
}
?>
</p>


<?php
$recettes = [
    [
        "titre" => "Spaghetti Bolognese",
        "ingredients" => ["spaghetti", "viande hachée", "tomates", "oignons", "ail"],
        "temps" => "30 minutes"
    ],
    [
        "titre" => "Poulet au curry",
        "ingredients" => ["poulet", "curry", "lait de coco", "riz"],
        "temps" => "40 minutes"
    ],
    [
        "titre" => "Salade César",
        "ingredients" => ["laitue", "poulet grillé", "croutons", "parmesan", "sauce césar"],
        "temps" => "15 minutes"
    ],
    [
        "titre" => "Quiche Lorraine",
        "ingredients" => ["pâte brisée", "œufs", "crème", "lardons", "fromage"],
        "temps" => "45 minutes"
    ]
];

for ($i = 0; $i < count($recettes); $i++) {
    echo "<h2>" . $recettes[$i]["titre"] . "</h2>";
    echo "<p><strong>Temps de préparation :</strong> " . $recettes[$i]["temps"] . "</p>";
    echo "<p><strong>Ingrédients :</strong></p>";
    echo "<ul>";
    foreach ($recettes[$i]["ingredients"] as $ingredient) {
        echo "<li>" . $ingredient . "</li>";
    }
    echo "</ul><hr>";
}

echo $recettes('titre');
?>

<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . '<br>'; 
}

echo'<pre>';
print_r($recipes);
echo'<pre>';

if (array_key_exists('author', $recipes))
{
    echo 'g réussi à réécire une ligne de commande o/';
}
?>

<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'recipe au singulier, ça va bien chercher la clé dans le array';
}
?>

<?php
$raoul_test = [
    'sujet' => 'Je',
    'verbe' => 'suis',
    'complement' => 'pas un bigboss',
];

if (in_array('suis', $raoul_test))
{
    echo 'g réussi à aller chercher à une valeur avec in_aray';
}
?>

<?php
$users = [
    'michel pfizer',
    'bertran quand ta',
    'mikael gregolio',
    'george moustache ki',
];

$positionMichel = array_search('michel pfizer', $users);
echo 'michel est dans le tableu, dans la position ' . $positionMichel;
?>

<?php
$resept = 'carborana';
$composition = 'il faut casser des oeufs pour en séparer le jaune et le blanc';
$length = strlen($composition);

echo 'La description comprend ' . $length . ' caractères pour la recette : ' . $resept;
?>

<?php
echo str_replace('s', 'CH', 'Qui sont ces serpents qui sifflent sur nos têtes ?');
?>

<?php
$vocabulary = [
    'debut' => 'je fais',
    'milieu1' => 'des bouts',
    'milieu2' => 'de phrases qui',
    'milieu3' => 'pourraient aller ensemble',
    'fin' => 'si je ne les melangeais pas'
];

echo sprintf(
    '%s THEN %s THEN %s THEN %s THEN %s',
    $vocabulary['fin'],
    $vocabulary['milieu3'],
    $vocabulary['milieu2'],
    $vocabulary['milieu1'],
    $vocabulary['debut']
);
?>

<?php
$date = date('d/m/Y');
$time = date('H \h i');
echo "Je code cette ligne le {$date} à {$time} sur le fuseau horaire de Donetsk";
?>

<?php

$losrecetos = [[
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : incorporez les romains ; Etape 3 : salez le tout',
    'author' => 'romain duris',
    'is_enabled' => true,
],
[
    'title' => 'Sushis',
    'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
    'author' => 'shiva',
    'is_enabled' => false,
],
[
    'title' => 'nougateen',
    'recipe' => 'Etape 1 : acheter du nougat ; Etape 2 : appelez votre ado',
    'author' => 'claude nougaro',
    'is_enabled' => true,
],
[
    'title' => 'carbonara',
    'recipe' => 'Etape 1 : Connectez vous à Uber Eats ; Etape 2 : Recherchez carbonara ; Etape 3 : commandez le plus cher',
    'author' => 'carla bruna',
    'is_enabled' => true,
],
[
    'title' => 'tacos',
    'recipe' => 'Etape 1 : prendre une galette et tracez des traits noirs au feutre ; Etape 2 : coupez de la viande au  ; Etape 3 : ajoutez le max de sauce fromagère possible ; Etape 4 : remplir les trous avec des frites surgelés',
    'author' => 'Kosta mitroglu',
    'is_enabled' => false,
]];

function isValidRecipe(array $recipe): bool {
    return $recipe['is_enabled'] === true;
}

function getRecipes(array $losrecetos): array {
    $validRecipes = [];
    foreach ($losrecetos as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}

foreach (getRecipes($losrecetos) as $recipe) {
    echo "<h4>" . $recipe['title'] . "</h4>";
    echo "<p>Auteur : " . $recipe['author'] . "</p>";
    echo "<p>" . $recipe['recipe'] . "</p><hr>";
}

function displayAuthors(array $losrecetos): array
{
    $authors = [];
    foreach ($losrecetos as $recipe) {
        if ($recipe['is_enabled'] === true) {
            $authors[] = $recipe['author'];
        }
    }
    return $authors;
}

$validAuthors = displayAuthors($losrecetos);
print_r($validAuthors);
?>

</body>
</html>