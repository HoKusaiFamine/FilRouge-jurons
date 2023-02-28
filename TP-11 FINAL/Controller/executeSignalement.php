<?php
include_once "../modele/Services/PenaliteServices.php";
include_once "../modele/Services/DBManagement.php";
session_start();

$_SESSION['stag'] = selectStagiaires();

$_SESSION['penalite'] = selectPenalite();


print_r($_SESSION['connect'][0]['id_user']);

header('Location:../View/signalement.php');


// insertPenalite();