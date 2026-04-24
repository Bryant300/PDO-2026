<?php


require_once "config.dev.php";


try{
    $pdo = new PDO(
        DB_CONNECT_TYPE . ":host=" . DB_CONNECT_HOST . ";port=" . DB_CONNECT_PORT . ";dbname=" . DB_CONNECT_NAME . ";charset=" . DB_CONNECT_CHARSET,
        DB_CONNECT_USER,
        DB_CONNECT_PWD
    );
} catch(PDOException $e){
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}