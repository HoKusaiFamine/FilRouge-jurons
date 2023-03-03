<?php

// fonction insert 

function insertPenalite($prix,$type):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
    $sql = "INSERT INTO penalite (prix,type) VALUES (?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->bindParam(1, $prix);
    $stmt->bindParam(2, $type);
   

    $status = $stmt->execute();

    return $status;
}


//***********************************************************


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
function selectIdPenalite($pena) : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT id_penalite FROM penalite WHERE type = '$pena'";
    
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $penalite = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $penalite;
}

function selectIdUser($user) : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT id_user FROM user WHERE prenom = '$user'";
    
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $penalite = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $penalite;
}


function balancePenalite ($id_penalite,$id_user,$date,$id_balance):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
    $sql = "INSERT INTO balance_injure (id_penalite, id_user, date, id_user_balance) VALUES (?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->bindParam(1, $id_penalite);
    $stmt->bindParam(2, $id_user);
    $stmt->bindParam(3, $date);
    $stmt->bindParam(4, $id_balance);
    $status = $stmt->execute();
    return $status;
}

function balancePenalitehisto ($id_penalite,$id_user,$date,$id_balance):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
    $sql = "INSERT INTO historique (id_penalite, id_user, date, id_user_balance) VALUES (?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->bindParam(1, $id_penalite);
    $stmt->bindParam(2, $id_user);
    $stmt->bindParam(3, $date);
    $stmt->bindParam(4, $id_balance);
    $status = $stmt->execute();

    return $status;
}
//***********************************************************

function retireInjures ($id_penalite) {
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    
    $sql = "DELETE FROM penalite WHERE id_penalite = $id_penalite";
    $stmt = $bdd-> prepare($sql);
    $stmt->bindParam(1, $id_penalite);
    $status = $stmt -> execute();
    
    return $status;

}


//***********************************************************

function affichePenalite() : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM penalite" ;
    
    $pdo = new PDO($dsn, $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->query($sql);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $user;
    }

//***********************************************************

function recupPremier() : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT prenom from penalite NATURAL JOIN user NATURAL JOIN balance_injure group by prenom order by SUM(prix) DESC LIMIT 3" ;
    
    $pdo = new PDO($dsn, $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->query($sql);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    return $user;
    }




?>