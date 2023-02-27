<!DOCTYPE html>
<html lang="en">
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
        <a class="nosoulign" href="home.html">Acceuil</a>
        <a class="nosoulign" href="signalement.php">Signalement</a>
        <a class="nosoulign" href="../Controller/executeHistorique.php">Historique</a>
        <a class="nosoulign" href="acceuil.php">Statistique</a>
    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php">deconection</a>
    </div>
  </header>
<body>
    
  <?php
  session_start();
  // $listeStag = array("Kaouthar",
  // "Lucas",
  // "Sebastien",
  // "Yacoube",
  // "Anthony",
  // "Alexandre",
  // "Jean-Batiste",
  // "Gregory",
  // "Julien",
  // "Thomas",
  // "Thibaut",
  // "Maksen",
  // "Florian",
  // "Paul",
  // "Batiste");
  
  //print_r($_SESSION["nom"]) ?>
<div class="card" style="width: 40rem;height: 30rem">
<div class="card-body">


  <form action="../Controller/SignalementReçois.php" method="post" class="form">
    <!-- Choix du stagiaire -->
    <div class="btn-group">
    <label class="textorange text-light" for="id">choix stag : </label>
                <select class="resizeselect" id='prenom' name ='prenom'>
                    <option selected>Choisir un prenom </option>

                    <?php for ($i=0; $i < count($_SESSION['stag']); $i++) {?>

                    <option value='<?= $_SESSION['stag'][$i]['prenom']?>'><?= $_SESSION['stag'][$i]['prenom']?></option>';
                <?php }?>
                </select>
    </div>


    <!-- CHOIX DE LA PENALITE-->

    <div class="btn-group">
    <label class="textorange text-light" for="id">choix stag : </label>
                <select class="resizeselect" id='prenom' name ='prenom'>
                    <option selected>Choisir un prenom </option>

                    <?php for ($i=0; $i < count($_SESSION['penalite']); $i++) {?>

                    <option value='<?= $_SESSION['penalite'][$i]['type']?>'><?= $_SESSION['penalite'][$i]['type']?></option>';
                  <?php }?>
                </select>
    </div>


    <!-- NOMBRE-->

    <div class="btn-group">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        Quantité
      </button>
      <ul class="dropdown-menu">
        <!--NB DE JURONS-->
        <div class="nbJuron">
          <li><label for="quantitéJr">Nombre de juron/rot</label>
            <input type="number" id="quantitéJr" name="quantitéJr" min="1" max="5">
          </li>
        </div>
        <!--RETARD-->
        <div class="nbRetard">
          <li class="nbRetard"><label for="quantitéRetard">Nombre de minutes de retard</label>
            <input type="number" id="quantitéRetard" name="quantitéRetard" min="5" max="">
          </li>
        </div>
      </ul>
    </div>
    <input class="btn btn-success submit" type="submit" value="Le signaler sans pitié"/>
  </form>
  </div>
</div>

    
</body>
</html>