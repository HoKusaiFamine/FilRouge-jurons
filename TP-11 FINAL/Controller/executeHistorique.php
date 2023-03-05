<?php
include "../modele/Services/DBManagement.php";
session_start();
//remetre le $_session a zero pour retourner chercher le dernier resultat en bdd
$_SESSION['balance_injure'] = null;
$_SESSION['balance_injure'] = afficheHistorique();
header('Location:../View/historique.php');

?>