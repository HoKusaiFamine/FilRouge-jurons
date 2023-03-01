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
        <a class="nosoulign" href="../View/home.html">Acceuil</a>
        <a class="nosoulign" href="acceuil.php">Signalement</a>
        <a class="nosoulign" href="../Controller/executeHistorique.php">Historique</a>
        <a class="nosoulign" href="acceuil.php">Statistique</a>
    </div>
    <div class="droite">
    <a class="nosoulign2" href="../Controller/executeDeco.php">deconnexion</a>
    </div>
  </header>

<body>
<?php session_start() ?>




<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>selectionne un ou plusieur nom pour suprimer de la BDD</h4>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="card mt-4">
            <div class="card-body">               
                        <form action="../controller/executeDelete.php" method="POST">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            <button type="submit" name="stud_delete_multiple_btn" class="btn btn-danger">Delete</button>
                                        </th>
                                        <th>id_user</th>
                                        <th>NOM</th>
                                        <th>PRENOM</th>
                                        <th>LOGIN</th>
                                        <th>ID_PROFIL</th>
                                    </tr>
                                
                                <form action="../Controller/executeDelete.php" method="post" class = "btn">  
                <?php
                for ($i=0; $i < count($_SESSION['user']); $i++) {
                    echo '<tr>';
                    echo '<td>' . '<input type = "checkbox" name = "id_user[]" value = "'.$_SESSION['user'][$i]['id_user'] . '"</td>';
                    echo '<td>' . $_SESSION['user'][$i]['id_user'] . '</td>';
                    echo '<td>' . $_SESSION['user'][$i]['nom'] . '</td>';
                    echo '<td>' . $_SESSION['user'][$i]['prenom'] . '</td>';
                    echo '<td>' . $_SESSION['user'][$i]['login'] . '</td>';
                    echo '<td>' . $_SESSION['user'][$i]['id_profil'] . '</td>';
                    echo '</tr>';
                }
                ?> 
</body>
</html>