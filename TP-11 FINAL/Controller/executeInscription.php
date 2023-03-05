<?php
include_once "../modele/Services/DBManagement.php";

// recuperation login , nom , prenom , mail, mdp pour inssersion dans bdd 
$login = $_POST['login'];
$username = $_POST['username'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$password = $_POST['mdp'];

//avant insertion verification que le login est diferant et metre lutilisateur en simple user 
if (controlInscription($login)){
    insertStagiaires($username,$prenom,$login ,$password,2,$mail);
    header("Location:../View/index.php");
    //si login identique redemander un autre
}else {  
    header("Location:../View/inscription2.php");
}