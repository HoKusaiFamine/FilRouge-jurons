<?php
include "../Modele/DBManagement.php";
session_start();
$_SESSION['User'] = null;
$_SESSION['User'] = selectStagiaires();
header('Location:../View/historique.php');
// print_r($_SESSION['user']);
 //insertStagiaires("flipo","piere","jean","1234",1);
?>