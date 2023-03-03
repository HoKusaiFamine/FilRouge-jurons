<?php
include "../modele/Services/DBManagement.php";
$id_penalite = $_POST['id_penalite'];
$prix = $_POST['prix'];
$type = $_POST['type'];

// $login = 'pp';
// $nom = 'hdhdhdh';
// $prenom = 'jdjdjdjd';
// $mail = 'dede@jejeje.com';
updateInjure($id_penalite,$prix,$type);
session_start();
$_SESSION['user'] = selectStagiaire();
header('Location:../View/home.admin.php');
?>