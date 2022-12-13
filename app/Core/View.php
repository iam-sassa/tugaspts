<?php

namespace OOP\App\Core;

class View
{
    public static function render(string $view, $data)
    {
        require __DIR__ . '/../View/template/header.php';
        require __DIR__ . '/../View/' .$view . '.php';
        require __DIR__ . '/../View/template/footer.php';
    }

    public static function create(string $view)
    {
        require __DIR__ . '/../View/template/header.php';
        require __DIR__ . '/../View/' .$view . '.php';
        require __DIR__ . '/../View/template/footer.php';
    }
}