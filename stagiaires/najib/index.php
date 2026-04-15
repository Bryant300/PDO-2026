<?php

// ma premiere connexion via pdo

$connexionPdo = new pdo(
    dsn: "mysql:host=localhost; dbname=listepays; port=3307; charset=utf8mb4;", //dsn = data source name
    username: "root", // le login
    password: "", //le mot de passe
);

$requiest = $connexionPdo->query("
    SELECT * FROM countries;
");

var_dump($connexionPdo,$requiest);

while($item = $requiest->fetch(PDO::FETCH_ASSOC)){
    echo $item["nom"]." | ";
}