<?php
include "../modele/Services/DBManagement.php";
$login = $_POST['login'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
// $login = 'pp';
// $nom = 'hdhdhdh';
// $prenom = 'jdjdjdjd';
// $mail = 'dede@jejeje.com';
updateUser($login,$nom,$prenom,$mail);
session_start();
$_SESSION['user'] = selectStagiaire();
header('Location:../View/home.admin.php');
?>