<?php

include "../modele/Services/DBManagement.php";
session_start();
//selectionner les info des stagiaire en bdd 'table user'
$_SESSION['stag'] = selectStagiaires();
//spression du balancé table balnce injure
$status2 = deleteBalanceInjure($_POST['id_user']);
//supression du stagiaire selectionne
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