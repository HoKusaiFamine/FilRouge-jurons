<?php
include "../modele/Services/DBManagement.php";
include "../modele/Services/PenaliteServices.php";

$id_penalite = $_POST['id_penalite'];
$prix = $_POST['prix_M'];
$type = $_POST['type_M'];


// $id_penalite = 13;
// $prix = 55;
// $type = "fefe";

updateInjure($id_penalite,$prix,$type);

$_SESSION['penalite'] = affichePenalite();
header('Location:../View/home.admin.php');
?>