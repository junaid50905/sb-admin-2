<?php
$host     = 'localhost';
$database = 'sb_admin_2';
$user     = 'root';
$password = '';
$dsn      = "mysql:host=$host;dbname=$database;charset=UTF8";

try {
    $pdo = new PDO($dsn, $user, $password);

    if ($pdo) {
        return $pdo;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>