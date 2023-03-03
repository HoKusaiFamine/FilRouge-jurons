<?php
include "../modele/Services/DBManagement.php";
$id_penalite = $_POST['id_penalite'];
$prix = $_POST['prix'];
$type = $_POST['type'];


// $id_penalite = 13;
// $prix = 55;
// $type = "fefe";

updateInjure($id_penalite,$prix,$type);

$_SESSION['user'] = selectStagiaire();
header('Location:../View/home.admin.php');
?>