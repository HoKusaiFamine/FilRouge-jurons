<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./historique.css">
    <title>Document</title>
</head>
<?php session_start() ?>
<body>
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