<?php
include "../modele/Services/DBManagement.php";
$id_penalite = $_POST['id_penalite'];
$prix = $_POST['prix_M'];
$type = $_POST['type_M'];


// $id_penalite = 13;
// $prix = 55;
// $type = "fefe";

updateInjure($id_penalite,$prix,$type);
session_start();
$_SESSION['penalite'] = affichePenalite();
header('Location:../View/home.admin.php');
?>