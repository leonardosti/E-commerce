<?php

namespace App\Model;
use PDO;

class Vino
{
    private $db;

    public function __construct(){
        $this->db = require __DIR__.'/../../Database/db_connection.php';
    }
    // Utente
    public function getVini():array{
        $query = "SELECT * FROM vini";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getViniByID($id):array{
        $query = "SELECT * FROM vini where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getViniLimit($limit = 3):array{
        $query = "SELECT vino_id, nome, prezzo_vendita, anno, immagine FROM Vino LIMIT :limit";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    // Admin
    /* to do */
}