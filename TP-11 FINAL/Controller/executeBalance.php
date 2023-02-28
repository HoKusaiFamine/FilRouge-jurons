<?php

include_once "../modele/Services/PenaliteServices.php";
include_once "../modele/Services/DBManagement.php";


$id_penalite = $_POST['penalite'];

$id_balance = $_SESSION['connect'][0]['id_user'];

$date = date("d-m-Y h-i-s");

$id_user = $_POST['prenom'];

$rep = selectIdPenalite($id_penalite);
$id_pena = $rep[0]['id_penalite'];

$rep2 = selectIdUser($id_user);

$idUser = $rep2[0]['id_user'];

balancePenalite($id_pena,$idUser,$date,$id_balance);

header('Location:../Controller/executeHistorique.php');

?>