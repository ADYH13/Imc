<?php 
session_start();
if (isset($_SESSION['username'])) { ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <!-- Ajout des fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>
<body>
 <!-- Barre de navigation -->
 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">IMC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="imc.php">Mon IMC</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="MonCompte.php">Mon compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Deconnexion</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Contenu de la page -->
<div class="container mt-4">
    <h1>Mon Compte</h1>
    <hr>

    <!-- Affichage des informations de l'utilisateur -->
    <div class="card mb-4">
        <div class="card-header">
            Informations personnelles
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?> </h5>
            <p class="card-text">Nom d'utilisateur : <?php echo $_SESSION['username'] ?></p>
            <p class="card-text">Adresse mail : <?php echo $_SESSION['email'] ?></p>
            <p class="card-text">Taille : <?php echo $_SESSION['taille'] ?> cm</p>
            <p class="card-text">Poids : <?php echo $_SESSION['poids'] ?> kg</p>
            <p class="card-text">Âge : <?php echo $_SESSION['age'] ?> ans</p>
        </div>
    </div>

    

    <!-- Bouton pour modifier les informations -->
    <a href="modifier.php" class="btn btn-danger">Modier mes informations</a>

    

</div>

<!-- Chargement des fichiers JavaScript de Bootstrap -->
<script src="js/jquery-3.6.3.min.js"></script>  
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php } else {
  $_SESSION['message_erreur'] = "Veuillez vous connecter pour accéder à cette page.";
  header("location: deconnexion.php");
}

?>

