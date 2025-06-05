<?php

namespace App\Model;

class Abbonamento
{
    private $db;

    public function __construct(){
        $this->db = require __DIR__.'/../../Database/db_connection.php';
    }
    // Utente
    public function getAbbonamento():array{
        $query = "SELECT * FROM livello_abbonamento where attivo = 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getAbbonamentoByID($id):array{
        $query = "SELECT * FROM livello_abbonamento where id = :id AND attivo = 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}