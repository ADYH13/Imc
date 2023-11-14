<?php 
session_start();
if (isset($_SESSION['username'])) { ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mon compte</title>
	<!-- Ajout du lien vers le fichier CSS de Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Ajout du lien vers le fichier CSS personnalisé -->
	<link rel="stylesheet" href="style.css">

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
	<div class="container mt-5">
		<h1>Mon compte</h1>
		<form method="post" action="update.php">
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $_SESSION['nom'] ?>">
			</div>
			<div class="form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $_SESSION['prenom'] ?>">
			</div>
			<div class="form-group">
				<label for="username">Nom d'utilisateur :</label>
				<input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username'] ?>">
			</div>
			<div class="form-group">
				<label for="email">Adresse e-mail :</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'] ?>">
			</div>
			<div class="form-group">
				<label for="password">Mot de passe :</label>
				<input type="password" class="form-control" id="password" name="password" value="<?php echo $_SESSION['mot_de_passe'] ?>">
			</div>
			<div class="form-group">
				<label for="taille">Taille (cm) :</label>
				<input type="number" class="form-control" id="taille" name="taille" value="<?php echo $_SESSION['taille'] ?>">
			</div>
			<div class="form-group">
				<label for="poids">Poids (kg) :</label>
				<input type="number" class="form-control" id="poids" name="poids" value="<?php echo $_SESSION['poids'] ?>">
			</div>
			<div class="form-group">
				<label for="age">Âge :</label>
				<input type="number" class="form-control" id="age" name="age" value="<?php echo $_SESSION['age'] ?>">
            </div>

            <button type="submit" class="btn btn-danger my-3">Valider les modifications</button>
        </form>
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