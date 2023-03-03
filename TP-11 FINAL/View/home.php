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
<?php session_start() ?>
<header class="header">
    <div class="gauche">
        <img src="assets/Logo-removebg-preview.png" class="img-fluid" >
    </div>
    <div class="centre">
        <a class="nosoulign" href="../View/home.php"><button class="btn-grad">Acceuil</button></a>
        <a class="nosoulign" href="../Controller/executeSignalement.php"><button class="btn-grad">Signalement</button></a>
        <a class="nosoulign" href="../Controller/executeHistorique.php"><button class="btn-grad">Historique</button></a>
        <a class="nosoulign" href="../View/statistique.php"><button class="btn-grad">Statistique</button></a>
        <?php 
        if ($_SESSION['connect'][0]['id_profil']==1) {
            echo '<a class="nosoulign" href="../Controller/executeDelete.php"><button class="btn-grad">(ADMIN)</button></a>';
        }
?>
        
  <!-- en config -->
        <!-- <a class="nosoulign" href="home.admin.php"><form action="../Controller/executeDelete.php" method="post" class = "btn"> </a>
            <button type="submit" name="stud_delete_multiple_btn" class="btn btn-danger">(ADMIN)<form action="../Controller/executeDelete.php" method="post" class = "btn"></form> </button> -->
            <!-- print_r($_SESSION['connect'][0]['id_profil']); -->
    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php"><button class="btn-grad2">Deconnexion</button></a>
    </div>
  </header>

<body>

<div>
    <img src="../View/img/podium-removebg-preview.png" alt="podium" class="center posimage" ></body>
</div>
<div>
        <?php
        
        ?>
        <div class="centrerLabel">
            <div class="sizelabel2">
                <?php
                if (count($_SESSION['premier'])>1) {
                    $deuxieme = $_SESSION['premier'][1]['prenom'];
                    echo "$deuxieme";
                }
                    ?>
            </div>
            <div class="sizelabel1">
            <?php
                if (count($_SESSION['premier'])>0) {
                    $premier = $_SESSION['premier'][0]['prenom'];
                    echo "$premier";
                }
                    ?>
            </div>
            <div class="sizelabel3">
            <?php
                if (count($_SESSION['premier'])>2) {
                    $troisieme = $_SESSION['premier'][2]['prenom'];
                    echo "$troisieme";
                }else{
                    echo "";
                }
                    ?>
                
            </div>
        </div>
    </div>
    
      
</body>
</html>