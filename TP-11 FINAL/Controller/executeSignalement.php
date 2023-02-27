<?php
include_once "../modele/Services/PenaliteServices.php";
include_once "../modele/Services/DBManagement.php";
session_start();
// $nom = $_POST["nom"];
// echo ($_POST["nom"]);
// $penalite = $_POST["penalite"];
// echo ($_POST["penalite"]);
// $quantitéJr = $_POST["quantitéJr"];
// echo ($_POST["quantitéJr"]);
// $quantitéRetard = $_POST["quantitéRetard"];
// echo ($_POST["quantitéRetard"]);

$_SESSION['stag'] = selectStagiaires();

$_SESSION['penalite'] = selectPenalite();


print_r($_SESSION['penalite']);

header('Location:../View/signalement.php');


// insertPenalite();