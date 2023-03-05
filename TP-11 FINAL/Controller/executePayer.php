<?php
include "../modele/Services/DBManagement.php";
include_once "../modele/Services/PenaliteServices.php";

//recuperation info stagiare
$_SESSION['stag'] = selectStagiaires();
//rechercher le prenom avec lid
$id = selectIdUser($_POST['prenom']);
//retrouver l info dun tableau dans un tableau
$idok = $id[0]['id_user'];
//supression de la dette
deletedette($idok);
//affichage podium page d'acceuill
$_SESSION['premier'] = recupPremier();
header('Location:../View/home.admin.php');



?>
