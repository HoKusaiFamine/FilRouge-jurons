<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="CSS/styleIndex.css" />
  <title>Index</title>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <!-- partie gauche(logo) -->
    <div class="gauche">
      <img src="assets/Logo-removebg-preview.png" class="img-fluid">
    </div>
    <!-- partie centre(boutons) -->
    <div class="centre">
      <a class="nosoulign" href="../View/home.php"><button class="btn-grad">Acceuil</button></a>
      <a class="nosoulign" href="../Controller/executeSignalement.php"><button class="btn-grad">Signalement</button></a>
      <a class="nosoulign" href="../Controller/executeHistorique.php"><button class="btn-grad">Historique</button></a>
      <a class="nosoulign" href="../View/statistique.php"><button class="btn-grad">Statistique</button></a>
    </div>
    <!-- partie droite(bouton deco) -->
    <div class="droite">
      <a class="nosoulign2" href="../Controller/executeDeco.php"><button class="btn-grad2">Deconnexion</button></a>
    </div>
  </header>

  <!-- ****************div pour le graph******************** -->
  <div class="posgraph">
    <canvas class="graph" id="myChart"></canvas>
  </div>

  <?php
  //connection a la bdd
  $con = mysqli_connect("localhost", "root", "", "boîte_a_jurons");
  //veification de la connexion 
  if (!$con) {
    echo "la connexion a la bdd a echoué";
  }
  //requete pour avoir le prenom et les montants
  $req = mysqli_query($con, "SELECT DISTINCT prenom from penalite NATURAL JOIN user NATURAL JOIN balance_injure order by prenom;");
  $req2 = mysqli_query($con, "SELECT SUM(prix) from penalite NATURAL JOIN user NATURAL JOIN balance_injure group by prenom order by prenom;");
  //boucle pour mettre les données dans un tableau
  foreach ($req as $data) {
    $prenom[] = $data['prenom'];
  }
  foreach ($req2 as $data2) {
    $prix[] = $data2['SUM(prix)'];
  }
  ?>
  <!-- ************************ parametres du graph canvas ********************** -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-autocolors"></script>
  <script>
    const ctx = document.getElementById('myChart').getContext('2d');

    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: <?php echo json_encode($prenom) ?>,
        datasets: [{
          label: 'Dette en €',
          data: <?php echo json_encode($prix) ?>,
          borderWidth: 2,
          backgroundColor:['#3ec424','#f83596','#f4fcd7','#8b452e','#fc0011','#570ca1','#b6fa4d','#0d69ee','#2b1aeb','#b4405a','#9a8dc0','#c0a309','#fc814d','#6ff4c3','#def92c','#2e3109']
        }]
      },
      options: {
        plugins:{
          legend: {
            position: 'bottom',
            labels: {
              padding: 50,
              color: '#000',
              boxHeight: 25,
              boxWidth: 50,
              font: {
                size: 30,
              }
            }
          }
        }
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>