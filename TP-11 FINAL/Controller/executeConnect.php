<?php
include('../modele/Services/DBManagement.php');


session_start();
$_SESSION['user'] = selectLogMdp();
$log = $_POST['loginConnect'];
$mdp = $_POST['passwordConnect'];

for ($i=0; $i < count($_SESSION['user']); $i++) { 
    
    if ($_SESSION['user'][$i]['login'] == $log and $_SESSION['user'][$i]['mdp'] == $mdp) {
        $_SESSION['log'] = $log;
        header('location:../View/home.html');
        exit();
    }else{
        header('location:../View/index.php');
    }
}



?>