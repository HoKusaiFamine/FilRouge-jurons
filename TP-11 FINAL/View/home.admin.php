<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../View/home.css" />
    <link rel="stylesheet" type="text/css" href="CSS/styleIndex.css" />
    <link rel="stylesheet">
    <title>page balance</title>
</head>
<header class="header">
    <div class="gauche">
        <img src="assets/Logo-removebg-preview.png" class="img-fluid">
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
    <?php session_start() ?>

    <div class="container">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h4>Selectionne un utilisateur pour supprimer la dette</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-body">
                    <tbody2 class="">
                        <div class="d-flex justify-content-center mb-3">
                            <form role="form" method="POST" action="../Controller/executePayer.php">
                                <div class="btn-group">
                                    <label class="textorange text-light" for="id_user" class="menu"></label>
                                    <select id='prenom' name='prenom' class="menu">
                                        <option selected>Choisir un prenom </option>
                                        <?php for ($i = 0; $i < count($_SESSION['stag']); $i++) { ?>
                                            <option value='<?= $_SESSION['stag'][$i]['prenom'] ?>'><?= $_SESSION['stag'][$i]['prenom'] ?></option>';
                                        <?php } ?>
                                    </select>
                                </div>
                        </div>
                        <div class="d-flex justify-content-center justify-content-around mb-3">
                            <input type="submit" name="submit" class="btn btn-success" value="Payer">
                            <a href="../View/home.admin.php" class="btn btn-danger">Annuler </a>
                            </form>
                        </div>
                    </tbody2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Selectionne un ou plusieur nom pour suprimer de la BDD</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mt-2">
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
                                    <form action="../Controller/executeDelete.php" method="post" class="btn">
                                        <?php
                                        for ($i = 0; $i < count($_SESSION['user']); $i++) {
                                            echo '<tr>';
                                            echo '<td>' . '<input type = "checkbox" name = "id_user[]" value = "' . $_SESSION['user'][$i]['id_user'] . '"</td>';
                                            echo '<td>' . $_SESSION['user'][$i]['id_user'] . '</td>';
                                            echo '<td>' . $_SESSION['user'][$i]['nom'] . '</td>';
                                            echo '<td>' . $_SESSION['user'][$i]['prenom'] . '</td>';
                                            echo '<td>' . $_SESSION['user'][$i]['login'] . '</td>';
                                            echo '<td>' . $_SESSION['user'][$i]['id_profil'] . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </form>
                                </tbody>
                            </table>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h4>Inscrit le login pour modifier nom et prenom et/ou mail</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mt-2">
                        <div class="card-body">
                            <form action="../Controller/executeUpdate.php" method="POST">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th class="rounded-start-2">LOGIN</th>
                                        <th class="">NOM</th>
                                        <th class="">PRENOM</th>
                                        <th class="rounded-end-3">MAIL</th>
                                    </tr>
                                    <?php for ($i = 0; $i < count($_SESSION['user']); $i++) {
                                        echo '<tr class="">';
                                        echo '<td class="bg-info-subtle text-dark rounded-start-2 opacity-75">' . $_SESSION['user'][$i]['login'] . '</td>';
                                        echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['user'][$i]['nom'] . '</td>';
                                        echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['user'][$i]['prenom'] . '</td>';
                                        echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['user'][$i]['mail'] . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </table>
                                <tbody class="">
                                    <div class="d-flex justify-content-center mb-3">
                                        <!-- <form role="form" method="POST" action="../Controller/executeUpdate.php"> -->
                                        <label class="text-black me-2">LOGIN</label>
                                        <input type="login" class="me-5" name="login">
                                        <label class="text-black me-2">NOM</label>
                                        <input type="nom" class="me-5" name="nom">
                                        <label class="text-black me-2">PRENOM</label>
                                        <input type="prenom" class="me-5" name="prenom">
                                        <label class="text-black me-2">MAIL</label>
                                        <input type="mail" class="me-5" name="mail">
                                    </div>
                                    <div class="d-flex justify-content-center justify-content-around mb-3">
                                        <input type="submit" name="submit" class="btn btn-success" value="Update">
                                        <a href="../View/home.admin.php" class="btn btn-danger">Annuler </a>
                            </form>
                        </div>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
        <div class>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h4>Ajouter une injure / Modifier la</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mt-2">
                        <div class="card-body">
                            <form action="../Controller/executeAjoutInjure.php" method="POST">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th class="rounded-start-2">ID_PENALITE</th>
                                        <th class="">PRIX</th>
                                        <th class="rounded-end-3">TYPE</th>
                                    </tr>
                                    <?php for ($i = 0; $i < count($_SESSION['penalite']); $i++) {
                                        echo '<tr class="">';
                                        echo '<td >' . $_SESSION['penalite'][$i]['id_penalite'] . '</td>';
                                        echo '<td >' . $_SESSION['penalite'][$i]['prix'] . '</td>';
                                        echo '<td >' . $_SESSION['penalite'][$i]['type'] . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </table>
                                <tbody class="">
                                    <div class="d-flex justify-content-center mb-3">
                                        <form role="form" method="POST" action="../Controller/excuteAjoutInjure.php">
                                            <label class="text-black me-2">PRIX</label>
                                            <input type="prix" class="me-5" name="prix">
                                            <label class="text-black me-2">TYPE</label>
                                            <input type="type" class="me-5" name="type">
                                    </div>
                                    <div class="d-flex justify-content-center justify-content-around mb-3 bordeur">
                                        <input type="submit" name="submit" class="btn btn-success" value="Inserer">
                                        <a href="../View/home.admin.php" class="btn btn-danger">Annuler </a>
                            </form>
                        </div>
                        </tbody>
                        <tbody2 class="">
                            <div class="d-flex justify-content-center mb-3">
                                <form role="form" method="POST" action="../Controller/executeModifInjure.php">

                                    <label class="text-black me-2">ID_PENALIE</label>
                                    <input type="id_penalite" class="me-5" name="id_penalite" required>

                                    <label class="text-black me-2">Modifier PRIX</label>
                                    <input type="prix" class="me-5" name="prix_M">

                                    <label class="text-black me-2">Et/Ou TYPE</label>
                                    <input type="type" class="me-5" name="type_M">
                            </div>
                            <div class="d-flex justify-content-center justify-content-around mb-3">
                                <input type="submit" name="submit" class="btn btn-success" value="Modifier">
                                <a href="../View/home.admin.php" class="btn btn-danger">Annuler </a>
                                </form>
                            </div>
                        </tbody2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="../View/js/callAjax.js"></script>
</body>

</html>