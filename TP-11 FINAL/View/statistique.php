<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="CSS/styleIndex.css" />
    <title>Index</title>
  </head>
  <body>

  <header class="header">
    <div class="gauche">
        <img src="assets/Logo-removebg-preview.png" class="img-fluid" >
    </div>
    <div class="centre">
        <a class="nosoulign" href="../View/home.html">Acceuil</a>
        <a class="nosoulign" href="acceuil.php">Signalement</a>
        <a class="nosoulign" href="../Controller/executeHistorique.php">Historique</a>
        <a class="nosoulign" href="../View/statistique.php">Statistique</a>
    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php">deconection</a>
    </div>
  </header>
  

  <div class="posgraph">
      
      <canvas class="graph" id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
