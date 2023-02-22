<?php
include "../modele/Services/DBManagement.php";
session_start();
$_SESSION['User'] = null;
$_SESSION['User'] = afficheStagiaires();
header('Location:../View/historique.php');
// print_r($_SESSION['user']);
// insertStagiaires("flipo","pepe","jean","1234",1);
?>