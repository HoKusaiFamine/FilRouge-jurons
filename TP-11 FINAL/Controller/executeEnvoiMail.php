<?php

include_once "../modele/Services/EnvoiMail.php";
//fonction test pour envoi mail
$mail = 'lbclbc59000@gmail.com';
$nom = 'jean';
$prenom = 'pepe';
$type = 'grosse';

envoiMail($mail, $nom, $prenom, $type)
?>
