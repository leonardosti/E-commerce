<?php

namespace Model;
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
    // Admin
    /* to do */
}