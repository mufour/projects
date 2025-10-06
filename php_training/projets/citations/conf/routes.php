<?php

declare(strict_types=1);

// Routes Authors
$router->map('GET', '/authors', function() {
(new App\Controller\AuthorController())->index();
});

$router->map('GET|POST', '/authors/add', function() {
(new App\Controller\AuthorController())->add();
});


// Routes quotes
// $router->map('GET', '/', function () {
//     (new App\Controller\QuoteController())->index();
// });

// $router->map('GET', '/quotes', function () {
//     (new App\Controller\QuoteController())->index();
// });

// $router->map('GET', '/quotes/list', function () {
//     (new App\Controller\QuoteController())->index();
// });

// $router->map('GET', '/quotes/show/[i:id]', function ($id) {
//     (new App\Controller\QuoteController())->show($id);
// });

// $router->map('GET', '/quotes/create', function () {
//     (new App\Controller\QuoteController())->create();
// });

// $router->map('GET', '/quotes/edit/[i:id]', function ($id) {
//     (new App\Controller\QuoteController())->edit($id);
// });

// $router->map('GET', '/quotes/delete/[i:id]', function ($id) {
//     (new App\Controller\QuoteController())->delete($id);
// });

$router->map('GET', '/error/exception', function() {
    (new App\Controller\ErrorController())->exception();
});