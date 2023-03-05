<?php
include "../modele/Services/PenaliteServices.php";
// include "../modele/Services/DBManagement.php";
session_start();
//recuperation valeur Prix et le type
$prix = $_POST['prix'];
$type = $_POST['type'];

//insertion dans la bdd
insertPenalite($prix,$type);

// affichage du resultat 
$_SESSION['penalite'] = affichePenalite();
//redirection vers la page admin
header('Location:../View/home.admin.php');
?>