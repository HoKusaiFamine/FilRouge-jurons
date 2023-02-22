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
    <link rel="stylesheet" type="text/css" href="CSS/styleIndex.css" />
    <title>Home</title>
</head>
<header class="header">
    <div class="gauche">
        <img src="assets/Logo-removebg-preview.png" class="img-fluid" >
    </div>
    <div class="centre">
        <a class="nosoulign" href="acceuil.php">Acceuil</a>
        <a class="nosoulign" href="acceuil.php">Signalement</a>
        <a class="nosoulign" href="acceuil.php">Historique</a>
        <a class="nosoulign" href="acceuil.php">Statistique</a>
    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php">deconection</a>
    </div>
  </header>

<body>
<?php session_start() ?>
<thead>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card mt-4">
 <div class="card-body">
                         
<table class="table table-bordered table-striped">

<thead>
    <tr>
        <th class="rounded-start-2">NOM</th>
        <th class="">PRENOM</th>
        <th class="">Balance</th>
        <th class="">Infraction</th>
        <th class="">Montant</th>
        
        <th class="rounded-end-3">DATE</th>
    </tr>
</thead>

<?php for ($i = 0; $i < count($_SESSION['User']); $i++) {
        echo '<tr class="">';
        echo '<td class="bg-info-subtle text-dark rounded-start-2 opacity-75">' . $_SESSION['User'][$i]['nom'] . '</td>';
        echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['User'][$i]['nom'] . '</td>';
        echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['User'][$i]['prenom'] . '</td>';
        echo '<td class="bg-info-subtle text-dark rounded-end-2 opacity-75">' . $_SESSION['User'][$i]['prenom'] . '</td>';
        echo '<td class="bg-info-subtle text-dark rounded-end-2 opacity-75">' . $_SESSION['User'][$i]['prenom'] . '</td>';
        echo '<td class="bg-info-subtle text-dark rounded-end-2 opacity-75">' . $_SESSION['User'][$i]['prenom'] . '</td>';
        echo '</tr>';
    }
?>
</table>
</div>  

je ne suis pas la

</body>
</html>