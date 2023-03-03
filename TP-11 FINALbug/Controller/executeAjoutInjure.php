<?php
include "../modele/Services/PenaliteServices.php";
// include "../modele/Services/DBManagement.php";
session_start();
$prix = $_POST['prix'];
$type = $_POST['type'];

// $prix = "1.5";
// $type = 'dede';

print_r($prix );
print_r($type );

insertPenalite($prix,$type);

$_SESSION['penalite'] = affichePenalite();

header('Location:../View/home.admin.php');
?>