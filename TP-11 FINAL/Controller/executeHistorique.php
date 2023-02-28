<?php
include "../modele/Services/DBManagement.php";
session_start();
$_SESSION['balance_injure'] = null;
$_SESSION['balance_injure'] = afficheHistorique();
header('Location:../View/historique.php');
// print_r($_SESSION['user']);
// insertStagiaires("flipo","pepe","jean","1234",1);
?>