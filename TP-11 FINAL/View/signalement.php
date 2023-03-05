<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
    crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../View/home.css" />
    <link rel="stylesheet" type="text/css" href="CSS/styleIndex.css" />
    <link rel="stylesheet" href="signalement.css">
    <title>page balance</title>
</head>
<header class="header">
    <div class="gauche">
        <img src="assets/Logo-removebg-preview.png" class="img-fluid" >
    </div>
    <div class="centre">
        <a class="nosoulign" href="../View/home.php"><button class="btn-grad">Acceuil</button></a>
        <a class="nosoulign" href="../Controller/executeSignalement.php"><button class="btn-grad">Signalement</button></a>
        <a class="nosoulign" href="../Controller/executeHistorique.php"><button class="btn-grad">Historique</button></a>
        <a class="nosoulign" href="../View/statistique.php"><button class="btn-grad">Statistique</button></a>
    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php"><button class="btn-grad2">Deconnexion</button></a>
    </div>
  </header>
<body onload="insertPenalite()">
    
<?php
session_start();
?>
<div class="card" style="width: 40rem;height: 30rem">
  <div class="card-body">
    <form id="form" class="form" action="post">
      <!-- Choix du stagiaire -->
      <div class="btn-group">
        <label class="textorange text-light" for="id" class = "menu"></label>
          <select  id='prenom' name ='prenom' class = "menu">
            <option selected>Choisir un prenom </option>
            <?php for ($i=0; $i < count($_SESSION['stag']); $i++) {?>
            <option value='<?= $_SESSION['stag'][$i]['prenom']?>'><?= $_SESSION['stag'][$i]['prenom']?></option>';
            <?php }?>
          </select>
      </div>
      <!-- CHOIX DE LA PENALITE-->
      <div class="btn-group">
        <label class="textorange text-light" for="penalite" class = "menu"></label>
          <select  id='penalite' name ='penalite' class = "menu">
            <option selected>Choisir une penalite </option>
            <?php for ($i=0; $i < count($_SESSION['penalite']); $i++) {?>
            <option value='<?= $_SESSION['penalite'][$i]['type']?>'><?= $_SESSION['penalite'][$i]['type']?></option>';
            <?php }?>
          </select>
      </div>

      <!-- NOMBRE-->

      <div class="btn-group">
        <label class="textorange text-light" for="id" class = "menu"> </label>
        <select name="Quantite" id="Quantite" class = "menu">
          <option value="Quantite">Quantite</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
      <div class="btn_submit">
        <input class="menu" type="submit" value="Le signaler sans pitié"/>
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="../View/js/callAjax.js"></script>
</body>
</html>