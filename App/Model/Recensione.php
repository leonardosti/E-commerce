<?php

namespace Model;
use PDO;
class Recensione
{
    private $db;
    public function __construct()
    {
        $this->db = require __DIR__.'/../../Database/db_connection.php';
    }
    // Utente
    public function getRecensioni():array{
        $query = "SELECT * FROM recensioni";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}