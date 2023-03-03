<?php

include "../modele/Services/DBManagement.php";


// $login = $_POST['login'];
// $nom = '???';
// $prenom = "???";
// $mail = "???";

// $status3 = updateNameBalanceInjure($_POST['id_user']);

// session_start();


// $status3 = updateNameBalanceInjure($_POST['id_user']);
$status2 = deleteBalanceInjure($_POST['id_user']);
$status = deleteStagiaire($_POST['id_user']);

$_SESSION['user'] = selectStagiaire();
if ($status) {
    $_SESSION['user'] = selectStagiaire();
    header('Location:../View/home.admin.php');
}else{
    $_SESSION['status'] = "Multiple Data Not Deleted";
    header("Location:../View/home.admin.php");
}

?>