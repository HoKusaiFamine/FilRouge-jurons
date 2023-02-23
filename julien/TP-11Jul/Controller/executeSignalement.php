<?php
include_once("../modele/Services/DBManagement.php");
include_once("../modele/Services/PenaliteServices.php");
session_start();
 $listeStag = array("Kaouthar",
 "Lucas",
 "Sebastien",
 "Yacoube",
 "Anthony",
 "Alexandre",
 "Jean-Batiste",
 "Gregory",
 "Julien",
 "Thomas",
 "Thibaut",
 "Maksen",
 "Florian",
 "Paul",
 "Batiste");
  $listePenal = array("Petit", "Gros", "Rot", "Retard");

  //$listeStag = selectStagiaires();
  //$listePenal = selectPenalite();
  $_SESSION["nom"] = $listeStag;
  $_SESSION["penalite"] = $listePenal;
  header("Location: ../View/signalement.php");