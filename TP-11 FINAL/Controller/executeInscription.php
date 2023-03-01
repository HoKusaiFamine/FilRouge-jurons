<?php
//  include('../modele/Services/inscription.php');
 include_once "../modele/Services/DBManagement.php";

// $login = "pepe";
// $username = 'gogo';
// $prenom = "keke";
// $mail = "jean@jean.fr";
// $password = "12345";

$login = $_POST['login'];
$username = $_POST['username'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$password = $_POST['mdp'];

if (controlInscription($login)){
    insertStagiaires($username,$prenom,$login ,$password,1,$mail);
    header("Location:../View/index.php");
}else {  
    header("Location:../View/inscription2.php");
}