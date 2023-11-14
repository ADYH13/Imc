<?php 
session_start();
if (isset($_SESSION['username'])) { ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calcul de l'IMC</title>
	<!-- Ajout des fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <li class="nav-item active">
          <a class="nav-link" href="imc.php">Mon IMC</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="MonCompte.php">Mon compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Deconnexion</a>
        </li>
      </ul>
    </div>
  </nav>

	<div class="container my-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header">
						Calcul de l'IMC
					</div>
					<div class="card-body">
						<form method="post" action="calcul.php">
							<div class="form-group">
								<label for="poids">Poids (en kg)</label>
								<input type="number" class="form-control" id="poids" name="poids" value="<?php echo $_SESSION['poids'] ?>">
							</div>
							<div class="form-group">
								<label for="taille">Taille (en cm)</label>
								<input type="number" class="form-control" id="taille" name="taille" value="<?php echo $_SESSION['taille'] ?>">
							</div>
							<button type="submit" class="btn btn-danger">Calculer</button>
						</form>
						<div id="resultat" class="container my-4 text-center"> <?php if (isset($_SESSION['resultat'])) {echo $_SESSION['resultat'];} ?></div>
					</div>
				</div>
			</div>
		</div>
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