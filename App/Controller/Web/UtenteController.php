<?php

namespace App\Controller\Web;

class UtenteController
{
    public function form($attributi){
        foreach ($attributi as $attributo => $tipo) {
            echo '<div class="mb-3">
                    <label for="'.$attributo.'" class="form-label fw-semibold">'.ucfirst($attributo).'</label>
                    <input type="'.$tipo.'" class="form-control" id="'.$attributo.'" name="'.$attributo.'" placeholder="'.($attributo === 'telefono' ? '1234567890' : 'Inserisci '.$attributo).'" 
                    '.($attributo === 'telefono' ? ' pattern="[0-9]{10}"' : '').' required>
                </div>';
        }
    }
    public function login()
    {
        $attributi = [
            'email' => 'email',
            'password' => 'password',
        ];
        $controller = $this;
        // View
        require __DIR__ . '/../../View/Web/login.php';
    }
    public function register()
    {
        $attributi = [
            'nome' => 'text',
            'cognome' => 'text',
            'indirizzo' => 'text',
            'citta' => 'text',
            'CAP' => 'number',
            'Paese' => 'text',
            'telefono' => 'tel',
            'email' => 'email',
            'password' => 'password',
        ];
        $controller = $this;
        // View
        require __DIR__ . '/../../View/Web/register.php';
    }
}