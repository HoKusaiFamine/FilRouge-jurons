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
  <img src="assets/Logo-removebg-preview.png" class="img-fluid" >
  </header>
  
<?php session_start() ; ?>
    <div class="centreForm">
      <div class="formConnect">
        <form action="../Controller/executeConnect.php" method="post">
          <p class="m-3">Connectez vous avec votre login/mdp</p>

          <div class="form-outline m-2">
            <input
              name="loginConnect";
              type="text"
              id="loginConnect"
              class="form-control"
              placeholder="Login"
            />
          </div>

          <div class="form-outline m-2">
            <input
            name="passwordConnect";
              type="password"
              id="passwordConnect"
              class="form-control"
              placeholder="Mot de passe"
            />
          </div>

          <div class="text-center pt-1 pb-1">
            <button
              class="btn btn-primary btn-block fa-lg gradient-custom-2 mt-2 mb-2"
              type="submit"
            >
              Connection
            </button>
            <p class="box-register">Vous êtes nouveau ici? <a href="inscription.php">S'inscrire</a></p>
          </div>
        </form>
        
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
