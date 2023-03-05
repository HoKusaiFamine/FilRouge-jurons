<?php
include('../modele/Services/DBManagement.php');
include('../modele/Services/PenaliteServices.php');

session_start();

//recuperation login et mdp 
$login = $_POST['loginConnect'];
$mdp = $_POST['passwordConnect'];
//recuperation des trois 1er en cour et des penalite
$_SESSION['premier'] = recupPremier();
$_SESSION['penalite'] = affichePenalite();

//controle d existance de l utilisateur dans la bdd mdp + login 
if (controlLogin($login,$mdp))
{
    header('location:../View/home.php');
}else {
    header('location:../View/index.php');
}


?>