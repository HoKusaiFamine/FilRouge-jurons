d<?php

session_start();
// fonction insert 

function insertStagiaires($nom,$prenom,$login,$mdp,$id_profil,$mail):bool{

    //cryptage mdp
    $mdp_crypte = sha1(sha1($mdp));

    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
    $sql = "INSERT INTO user (nom,prenom,login,mdp,id_profil,mail) VALUES (?,?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->bindParam(1, $nom);
    $stmt->bindParam(2, $prenom);
    $stmt->bindParam(3, $login);
    $stmt->bindParam(4, $mdp_crypte);
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
$sql = "SELECT id_user,nom,prenom  FROM user";

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

        //cryptage mdp
    $mdp_crypte = sha1(sha1($mdp));
    $pdo = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '');
    $stmt= $pdo->prepare("SELECT *  FROM user WHERE login = '$login' and mdp = '$mdp_crypte' ");
    $stmt->execute();
    $userTab = $stmt->fetchAll();
    $_SESSION['connect'] = $userTab;
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
    $sql = "SELECT * FROM historique NATURAL JOIN user NATURAL JOIN penalite  ORDER BY date DESC LIMIT 50" ;
    
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
if(count($userTab) < 1)
    return true;
else    
    return false;
}

function updateUser($login,$nom,$prenom,$mail): bool
{
    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // modification des données
   
    $sql = "UPDATE user SET  nom ='$nom', prenom='$prenom', mail='$mail' WHERE login='$login'";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare($sql);
    $update = $stmt->execute();
    return $update;
}
function deleteBalanceInjure($liste): bool
{
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    foreach ($liste as $id_user) {
        $sql = "DELETE FROM balance_injure WHERE id_user ='$id_user'";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute();
    }
    
    return $status;
}
function insertInjure($prix,$type): bool
{
    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // modification des données
   
    $sql = "INSERT INTO penalite (prix,type) VALUES ($prix,$type)";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare($sql);
    $update = $stmt->execute();
    return $update;
}

function updateInjure($id_penalite,$prix,$type): bool
{
    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // modification des données 
    $sql = "UPDATE penalite SET  prix ='$prix', type='$type' WHERE id_penalite='$id_penalite'";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare($sql);
    $update = $stmt->execute();
    return $update;
}

function deletedette($id_user)
{
    $bdd = new PDO('mysql:host=localhost;dbname=boîte_a_jurons;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;  
    $sql = "DELETE FROM balance_injure   WHERE id_user ='$id_user'";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    
    
    return $status;
}


function selectMail($nomB) : array{

    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
      
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs
    $sql = "SELECT mail FROM user WHERE prenom = '$nomB'";
    
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $penalite = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $penalite;
}

function selectPrenom($id_userB): array
{
    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // récupérer tous les utilisateurs
    $sql = "SELECT prenom FROM user WHERE id_user ='$id_userB'";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}
function selectNom($id_userB): array
{
    $host = 'localhost';
    $dbname = 'boîte_a_jurons';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // récupérer tous les utilisateurs
    $sql = "SELECT nom FROM user WHERE id_user ='$id_userB'";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}
