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
        <a class="nosoulign" href="signalement.php">Signalement</a>
        <a class="nosoulign" href="../Controller/executeHistorique.php">Historique</a>
        <a class="nosoulign" href="../View/statistique.php">Statistique</a>
    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php">deconnexion</a>
    </div>
  </header>
  

  <div class="posgraph">
      
      <canvas class="graph" id="myChart"></canvas>
    </div>

    <?php
//connection a la bdd
$con = mysqli_connect("localhost","root","","boîte_a_jurons");
//veification de la connexion 
if (!$con) {
  echo "la connexion a la bdd a echoué";
}
//requete pour avoir le prenom et les montants
$req = mysqli_query($con,"SELECT DISTINCT prenom from penalite NATURAL JOIN user NATURAL JOIN balance_injure;");
$req2 = mysqli_query($con,"SELECT SUM(prix) from penalite NATURAL JOIN user NATURAL JOIN balance_injure group by prenom;");
//boucle pour mettre les données dans un tableau
foreach ($req as $data) {
  $prenom[] = $data['prenom'];
}
foreach ($req2 as $data2) {
  $prix[] = $data2['SUM(prix)'];
}

?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script >const ctx = document.getElementById('myChart').getContext('2d');

new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: <?php echo json_encode($prenom) ?>,
    datasets: [{
      label: 'Dette en €',
      data: <?php echo json_encode($prix) ?>,
      borderWidth: 1
    }]
  },
  options: {
    
    
  }
});</script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
