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
    <title>Home</title>
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
  <!-- en config -->
        <a class="nosoulign" href="home.admin.php"><form action="../Controller/executeDelete.php" method="post" class = "btn"> </a>
            <button type="submit" name="stud_delete_multiple_btn" class="btn btn-danger">(ADMIN)<form action="../Controller/executeDelete.php" method="post" class = "btn"></form> </button>

    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php"><button class="btn-grad2">Deconnexion</button></a>
    </div>
  </header>

<body>
<?php session_start() ?>
<div>
    <img src="../View/img/podium-removebg-preview.png" alt="podium" class="center posimage" ></body>
</div>
<div>
        <?php
        $premier = $_SESSION['premier'][0]['prenom'];
        $deuxieme = $_SESSION['premier'][1]['prenom'];
        $troisieme = $_SESSION['premier'][2]['prenom'];
        ?>
        <div class="centrerLabel">
            <div class="sizelabel2">
                <?php echo "$deuxieme" ?>
            </div>
            <div class="sizelabel1">
                <?php echo "$premier" ?>
            </div>
            <div class="sizelabel3">
                <?php echo "$troisieme" ?>
            </div>
        </div>
    </div>

      
</body>
</html>