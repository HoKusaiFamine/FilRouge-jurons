<?php
include_once "../modele/Services/PenaliteServices.php";
include_once "../modele/Services/DBManagement.php";
session_start();
$_SESSION['stag'] = selectStagiaires();
$_SESSION['penalite'] = selectPenalite();
header('Location:../View/signalement.php');