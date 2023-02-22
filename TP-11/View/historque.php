<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<thead>
        <tr>
            <th class="rounded-start-2">Nom</th>
            <th class="">PRENOM</th>
            <!-- <th class="">Balance</th>
            <th class="">Infraction</th>
            <th class="">Montant</th>
            <th class="">Date</th> -->
            <th class="rounded-end-3">PRENOM</th>
        </tr>
    </thead>

    <?php for ($i = 0; $i < count($_SESSION['user']); $i++) {
            echo '<tr class="">';
            echo '<td class="bg-info-subtle text-dark rounded-start-2 opacity-75">' . $_SESSION['user'][$i]['nom'] . '</td>';
            // echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['user'][$i]['NOM'] . '</td>';
            // echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['user'][$i]['PRENOM'] . '</td>';
            echo '<td class="bg-info-subtle text-dark rounded-end-2 opacity-75">' . $_SESSION['user'][$i]['prenom'] . '</td>';
            echo '</tr>';
        }
    ?>
</body>
</html>