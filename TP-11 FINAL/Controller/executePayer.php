<?php
include "../modele/Services/DBManagement.php";
include_once "../modele/Services/PenaliteServices.php";

$_SESSION['stag'] = selectStagiaires();

// $id_user = 'thibaut';


deletedette($_POST['id_user']);

// $prenom = '98';

// $_SESSION['stag'] = selectStagiaires();
// $status2 = deleteBalanceInjure($_POST['prenom']);
// deletedette($prenom);

// deletedette($_POST['prenom']);

header('Location:../View/home.admin.php');



?>
