<?php

namespace App\Controller\Web;

use App\Model\Vino;
use Exception;

class HomeController
{
    private $vino;

    public function __construct(){
        $this->vino = new Vino();
    }
    public function index()
    {
        try {
            $limitVini = $this->vino->getViniLimit(3);

            $presentazione = [
                'titolo' => 'Vinum Novum, la tua enoteca online',
                'paragrafi' => [
                    "L'idea di creare Vinum Novum, un'enoteca specializzata nella <strong>vendita di vino online</strong>, è nata dalla passione per il vino e per il mondo che lo circonda: il fascino delle cantine e delle loro tradizioni, l'impegno e la pazienza nascosti in ogni bottiglia, la bellezza delle colline coperte di vigne, i loro verdi estivi e i loro rossi e gialli autunnali, il profumo intenso di mosto che si sprigiona nelle giornate di ottobre, i paesaggi nebbiosi e coperti di bruma, l'allegria di certe serate con gli amici... Del vino ci affascina tutto, ma proprio tutto.",
                    "Assaggio dopo assaggio, lavoriamo ogni giorno per migliorare la nostra offerta di vini rossi, vini bianchi, champagne e distillati: siamo convinti che <strong>selezionare sia più importante che proporre tutto indistintamente.</strong>"
                ]
            ];

        } catch (Exception $e) {
            die("Errore nel recupero dei dati per la homepage: " . $e->getMessage());
        }

        // Array dei dati
        $dati = [
            'limitVini' => $limitVini,
            'presentazione' => $presentazione
        ];

        // Includo la view
        require __DIR__ . '/../../View/Web/index.php';
    }
}