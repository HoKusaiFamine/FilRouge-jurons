<?php

include "../modele/Services/DBManagement.php";
 session_start();

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