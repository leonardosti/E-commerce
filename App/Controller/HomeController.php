<?php

namespace App\Controller;

class HomeController
{
    public function index() {
        $dati = [
            'titolo'  => 'Benvenuto in Cantina MVC',
            'sottotitolo' => 'Scopri i nostri vini pregiati!'
        ];

        require __DIR__.'/../View/index.php';
    }
}