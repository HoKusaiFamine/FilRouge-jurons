<?php
include('../modele/Services/DBManagement.php');
include('../modele/Services/PenaliteServices.php');

session_start();
// // $_SESSION['user'] = selectLogMdp();
$login = $_POST['loginConnect'];
$mdp = $_POST['passwordConnect'];
$_SESSION['premier'] = recupPremier();
// $login = "thomas";
// $mdp = "1245";
$_SESSION['penalite'] = affichePenalite();



if (controlLogin($login,$mdp)){
    header('location:../View/home.php');
    //  exit();
}else {
    header('location:../View/index.php');
}


// controlLogin($login,$mdp);



?>