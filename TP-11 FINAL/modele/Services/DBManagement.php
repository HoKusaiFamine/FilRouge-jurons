<?php

session_start();
// fonction insert 

function insertStagiaires($nom,$prenom,$login,$mdp,$id_profil,$mail):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
    $sql = "INSERT INTO user (nom,prenom,login,mdp,id_profil,mail) VALUES (?,?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->bindParam(1, $nom);
    $stmt->bindParam(2, $prenom);
    $stmt->bindParam(3, $login);
    $stmt->bindParam(4, $mdp);
    $stmt->bindParam(5, $id_profil);
    $stmt->bindParam(6, $mail);
    $status = $stmt->execute();

    return $status;
}

//***********************************************************

// fonction select

function selectStagiaires() : array{

$host = 'localhost';
$dbname = 'boîte_a_jurons';
$username = 'root';
$password = '';
  
$dsn = "mysql:host=$host;dbname=$dbname"; 
// récupérer tous les utilisateurs
$sql = "SELECT id_user,nom,prenom FROM user";

$pdo = new PDO($dsn, $username, $password);
$stmt = $pdo->query($sql);
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $user;
}



//***********************************************************




function afficheStagiaires() : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM user";
    
    $pdo = new PDO($dsn, $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->query($sql);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $user;
    }



//***********************************************************


// fonction update

function updateStagiaires(string $nom, string $prenom, int $place) : void  {
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $nb_modifs = $bdd->exec("UPDATE stagiaire SET NOM='$nom',PRENOM='$prenom' WHERE PLACE='Place_$place';");
    echo $nb_modifs . ' entrées ont été modifiées !';

}




//***********************************************************


// fonction delete


function deleteStagiraires(array $listStag) : bool {

    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    for ($i=0; $i < count($listStag['ID']) ; $i++) { 
        $id = $listStag['ID'][$i];
        $sql = "DELETE FROM stagiaire WHERE ID = $id";
        $stmt = $bdd-> prepare($sql);
        $status = $stmt -> execute();
    }
    return $status;
}

//**********************************************************************************

//function select mdp/log

function selectLogMdp() : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT login,mdp FROM user";
    
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $user;
    }



    function controlLogin($login, $mdp) : bool{

        $pdo = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '');
        $stmt= $pdo->prepare("SELECT login,mdp, id_user, id_profil, prenom  FROM user WHERE login = '$login' and mdp = '$mdp' ");
        $stmt->execute();
        $userTab = $stmt->fetchAll();
        $_SESSION['connect'] = $userTab;
        print_r($_SESSION['connect']);
        if(count($userTab) > 0)
            return true;
        else    
            return false;
    

       
    }


    /// fonction delete jb

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


//***************************************

function afficheHistorique() : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM balance_injure NATURAL JOIN user NATURAL JOIN penalite;" ;
    
    $pdo = new PDO($dsn, $username, $password , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->query($sql);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $user;
    }



//***************************************


function controlInscription($login) : bool{

    $pdo = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '');
    $stmt= $pdo->prepare("SELECT login  FROM user WHERE login = '$login' ");
    $stmt->execute();
    $userTab = $stmt->fetchAll();
    $_SESSION['inscription'] = $userTab;
    print_r($_SESSION['inscription']);
if(count($userTab) < 2)
    return true;
else    
    return false;
  
}




?>