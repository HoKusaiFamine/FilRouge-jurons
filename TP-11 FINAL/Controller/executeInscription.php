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

 insertStagiaires($username,$prenom,$login ,$password,2,$mail);

 header("Location:../View/index.php");
