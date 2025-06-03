<?php
$attribute = require 'db_attributes.php';

try{
    return new PDO($attribute['dns'], $attribute['username'], $attribute['password'], $attribute['options']);
} catch(PDOException $e){
    // messaggio di errore
    echo "<script>alert('Impossibile connettersi al database: " . addslashes($e->getMessage()) . "');</script>";
}