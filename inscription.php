
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..."/>

  <!-- Liens CDN pour Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Inscription</h2>
        <form method="post" action="create.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputFirstName">Prénom</label>
              <input type="text" class="form-control" id="inputFirstName" name="inputFirstName">
            </div>
            <div class="form-group col-md-6">
              <label for="inputLastName">Nom</label>
              <input type="text" class="form-control" id="inputLastName" name="inputLastName" >
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputUsername">Nom d'utilisateur</label>
              <input type="text" class="form-control" id="inputUsername" name="inputUsername">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail">Adresse email</label>
              <input type="email" class="form-control" id="inputEmail"  name="inputEmail">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword">Mot de passe</label>
              <input type="password" class="form-control" id="inputPassword" name="inputPassword">
            </div>
            <div class="form-group col-md-6">
              <label for="inputConfirmPassword">Confirmez le mot de passe</label>
              <input type="password" class="form-control" id="inputConfirmPassword" name="inputConfimPassword">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputHeight">Taille (en cm)</label>
              <input type="number" class="form-control" id="inputHeight" name="inputHeight">
            </div>
            <div class="form-group col-md-4">
              <label for="inputtaille">Poids (kg)</label>
              <input type="number" class="form-control" id="inputweight" name="inputweight">
            </div>
            <div class="form-group col-md-4">
              <label for="inputAge">Âge</label>
              <input type="number" class="form-control" id="inputAge" name="inputAge" >
            </div>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">S'inscrire</button>
          </div>

          <div class="container text-center">
            <a href="connexion.php" class = "" >Vous n'avez pas de compte ?</a>
          </div>
          
        </form>
      </div>
      <script src="js/jquery-3.6.3.min.js"></script>  
<script src="js/bootstrap.js"></script>
</body>
</html>