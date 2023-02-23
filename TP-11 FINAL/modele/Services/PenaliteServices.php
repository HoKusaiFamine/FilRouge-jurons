<?php

// fonction insert 

function insertPenalite($prix,$type,$quantite):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
    $sql = "INSERT INTO penalite (prix,type,quantite) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->bindParam(1, $prix);
    $stmt->bindParam(2, $type);
    $stmt->bindParam(3, $quantite);

    $status = $stmt->execute();

    return $status;
}

function selectPenalite() : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM penalite";
    
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $penalite = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $penalite;
}


//***********************************************************

function balancePersonne ( ){
    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT nom,prenom FROM user NATURAL JOIN penalite";
    
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $penalite = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $penalite;
}


//***********************************************************

function retireInjures ($id_penalite) {
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    
    // $id = $id_penalite;
    $sql = "DELETE FROM penalite WHERE id_penalite = $id_penalite";
    $stmt = $bdd-> prepare($sql);
    $stmt->bindParam(1, $id_penalite);
    $status = $stmt -> execute();
    
    return $status;

}



?>