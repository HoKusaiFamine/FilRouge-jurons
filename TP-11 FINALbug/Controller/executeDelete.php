<?php

include "../modele/Services/DBManagement.php";
session_start();
$status2 = deleteBalanceInjure($_POST['id_user']);
$status = deleteStagiaire($_POST['id_user']);
$_SESSION['premier'] = recupPremier();
$_SESSION['user'] = selectStagiaire();
if ($status) {
    $_SESSION['user'] = selectStagiaire();
    header('Location:../View/home.admin.php');
}else{
    $_SESSION['status'] = "Multiple Data Not Deleted";
    header("Location:../View/home.admin.php");
}

?>