<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Mon application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..."/>

  <!-- Liens CDN pour Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container col-md-3 mt-5 mb-0 " >
  <h2 class="text mb-4 text-center">Connexion</h2>
  <form method="post" action="connect.php">
    <div class="form-group">
        <label for="username" class="text-secondary">Nom d'utilisateur :</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" id="username" placeholder="Entrer votre nom d'utilisateur" name="username">
    </div>

    <div class="form-group">
        <label for="password" class="text-secondary">Mot de passe :</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe" name="password">
        </div>
    </div>

    </div>
      
    <button type="submit" class="btn btn-primary btn-block mt-4">
        <i class="fas fa-lock"></i> Se connecter
      </button>
      <div class="container text-center">
          <a href="inscription.php" >Vous avez déja un compte ?</a>
      </div>
      <div class="container text-center">
          <p class="text-danger"> <?php if (isset($_SESSION['message_erreur'])){echo $_SESSION['message_erreur'];} ?></p>
      </div>
      
  </form>
</div>
<script src="js/jquery-3.6.3.min.js"></script>  
<script src="js/bootstrap.js"></script>
</body>
</html>

<?php session_destroy() ?>
