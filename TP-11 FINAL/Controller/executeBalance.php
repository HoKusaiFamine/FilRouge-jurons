<?php

include_once "../modele/Services/PenaliteServices.php";
include_once "../modele/Services/DBManagement.php";


$id_penalite = $_POST['penalite'];

$id_balance = $_SESSION['connect'][0]['id_user'];

$date = date("d-m-Y h-i-s");

$id_user = $_POST['prenom'];



// balancePenalite($id_penalite,$id_user,$date,$id_balance);


// header('Location:../view/historique.php');

?>