<?php

include_once "../modele/Services/PenaliteServices.php";
include_once "../modele/Services/DBManagement.php";

$status = false;

$id_penalite = $_REQUEST['penalite'];

$id_balance = $_SESSION['connect'][0]['id_user'];

$date = date("Y-m-d h-i-s");

$id_user = $_REQUEST['prenom'];

$rep = selectIdPenalite($id_penalite);
$id_pena = $rep[0]['id_penalite'];

$rep2 = selectIdUser($id_user);

$idUser = $rep2[0]['id_user'];

$quantite = $_REQUEST['Quantite'];

for ($i=1; $i <= $quantite ; $i++) { 
    $status = balancePenalite($id_pena,$idUser,$date,$id_balance); 
    balancePenalitehisto($id_pena,$idUser,$date,$id_balance);   
}

if ($status) {
    echo 'ok';
}else{
    echo 'error';
}


// header('Location:../Controller/executeHistorique.php');

?>