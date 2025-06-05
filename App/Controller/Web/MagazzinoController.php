<?php

namespace App\Controller\Web;

use App\Model\Abbonamento;
use App\Model\Vino;
use Exception;
class MagazzinoController
{
    private $vino;
    public function __construct(){
        $this->vino = new Vino();
    }
    public function index()
    {
        try {
            $vini = $this->vino->getViniDisponibili();
        } catch (Exception $e) {
            die("Errore nel recupero dei dati per la homepage: " . $e->getMessage());
        }
        // Array dei dati
        $dati = [
            'Vini' => $vini,
        ];

        // View
        require __DIR__ . '/../../View/Web/cantina.php';
    }
    public function filter(){
        // View
        require __DIR__ . '/../../View/Web/cantina.php';
    }
}