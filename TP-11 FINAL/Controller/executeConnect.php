<?php
include('../modele/Services/DBManagement.php');


// session_start();
// // $_SESSION['user'] = selectLogMdp();
$login = $_POST['loginConnect'];
$mdp = $_POST['passwordConnect'];

// $login = "thomas";
// $mdp = "1245";

if (controlLogin($login,$mdp)){
    header('location:../View/home.html');
    //  exit();
}else {
    header('location:../View/index.php');
}


// controlLogin($login,$mdp);



?>