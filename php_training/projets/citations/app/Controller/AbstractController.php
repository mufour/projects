<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    protected function render(string $view, array $params = []): void
    {
        require_once ROOT_PATH . '/view/' . $view . '.php';
    }
}
