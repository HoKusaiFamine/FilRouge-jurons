<?php
include "../modele/Services/DBManagement.php";

//reuperation des info dans un formulaire 
$login = $_POST['login'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
//modification dans la bdd
updateUser($login,$nom,$prenom,$mail);
session_start();
//affichage maj $session user
$_SESSION['user'] = selectStagiaire();
header('Location:../View/home.admin.php');
?>