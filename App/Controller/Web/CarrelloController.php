<?php

namespace App\Controller\Web;

class CarrelloController
{
    public function index()
    {
        // View
        require __DIR__ . '/../../View/Web/cart.php';
    }
}