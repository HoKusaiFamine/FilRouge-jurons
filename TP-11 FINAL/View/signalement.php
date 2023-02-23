<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/signalement.css">
  <title>Document</title>
</head>

<body>

  <?php
  session_start();
  /*$listeStag = array("Kaouthar",
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
    $listepenalite = */
  //print_r($_SESSION["nom"]) ?>
<div class="card" style="width: 40rem;height: 30rem">
<div class="card-body">


  <form action="../Controller/SignalementReçois.php" method="post">
    <!-- Choix du stagiaire -->
    <div class="btn-group">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
        Choix du Stagiaire
      </button>
      <ul class="dropdown-menu">
        <?php for ($i = 0; $i < count($_SESSION["nom"]); $i++) { ?>
          <li><input type="radio" class="btn-check" name="nom" id="option1" value=<?php $_SESSION["nom"][$i]; ?>>
            <label class="btn btn-secondary" for="option1"><?php echo $_SESSION["nom"][$i]; ?>
            <input type="radio" name="nom" value="<?php echo $_SESSION["nom"][$i]; ?>"></label></td>
          </li>
        <?php } ?>
      </ul>

    </div>


    <!-- CHOIX DE LA PENALITE-->

    <div class="btn-group">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
        Pénalité à signaler
      </button>
      <ul class="dropdown-menu">
        <?php for ($i = 0; $i < count($_SESSION["penalite"]); $i++) { ?>
          <li>
            <label class="btn btn-secondary" for=""><?php echo $_SESSION["penalite"][$i]; ?>
            <input type="radio" name="penalite" value="<?php echo $_SESSION["penalite"][$i]; ?>"></label></td>
          </li>
        <?php } ?>
      </ul>
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
    <input class="btn btn-success submit" type="submit" value="Le signaler sans pitié" />
  </form>
  </div>
</div>



  <!--PODIUM des Balances-->
  <table>
    <tr>
      <td><img src="./img/croissant 3.png" alt="">
      <td> Thibaut</td>
    </tr>
    <tr>
      <td><img src="./img/croissant_argent.png" alt="">
      <td> Thibaut</td>
    </tr>
    <tr>
      <td><img src="./img/croissant_bronze-removebg-preview 1.png" alt="">
      <td> Thibaut</td>
    </tr>
  </table>

  <!-- SCRIPT-->
  <!-- <script>

$('input[type="radio"]').click(function(){
        if($(this).attr("value")== "Petit" ||"Gros"||"Rot"){
            $(".nbRetard").hide('slow');
        }
        if($(this).attr("value")=="Retard"){
            $(".nbRetard").show('slow');

        }        
    });
$('input[type="radio"]').trigger('click');
</script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>