<?php
include "../modele/Services/DBManagement.php";
include "../modele/Services/PenaliteServices.php";

//recuperation des information  prix type et id penalite
$id_penalite = $_POST['id_penalite'];
$prix = $_POST['prix_M'];
$type = $_POST['type_M'];

//modification du nom et prenom en fonction de l id
updateInjure($id_penalite,$prix,$type);
//affiche le nouveau resultat
$_SESSION['penalite'] = affichePenalite();
header('Location:../View/home.admin.php');
?>