<?php

namespace Controller;

class HomeController
{
    public function index() {
        // dati che voglio passare alla view (se servono)
        $dati = [
            'titolo'  => 'Benvenuto in Cantina MVC',
            'sottotitolo' => 'Scopri i nostri vini pregiati!'
        ];
        require '../View/index.php';
    }

}