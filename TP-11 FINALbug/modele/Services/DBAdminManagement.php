<?php

function deleteStagiaire($liste): bool
{
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    foreach ($liste as $id_user) {
        $sql = "DELETE FROM user WHERE id_user ='$id_user'";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute();
    }
    
    return $status;
}

function selectStagiaire(): array
{
    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM user";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}