<?php 
session_start();
if (isset($_SESSION['username'])) { ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Page d'accueil - IMC</title>

  <!-- Chargement des fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Style personnalisé -->
  <style>
    /* Ajout de styles personnalisés */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    .jumbotron {
      background-color: #4B9E9E;
      color: white;
    }
  </style>
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
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="imc.php">Mon IMC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="MonCompte.php">Mon compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Deconnexion</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Contenu principal -->
  <div class="container mt-4">
    <div class="jumbotron bg-dark">
      <h1 class="display-4">Indice de Masse Corporelle</h1>
      <p class="lead">Le calcul de l'IMC est un moyen simple et rapide d'évaluer votre corpulence.</p>
      <hr class="my-4">
      <p>Sur notre site, vous pouvez facilement calculer votre IMC en indiquant votre poids et votre taille. L'IMC est un indicateur simple et couramment utilisé pour évaluer la corpulence d'une personne et déterminer si elle est dans une catégorie de poids saine ou à risque.</p>
    <p>L'IMC ne permet pas de mesurer directement la graisse corporelle ou la répartition de la graisse, qui peuvent également être des facteurs de risque de maladies. C'est pourquoi, il est important de consulter un professionnel de la santé pour obtenir une évaluation plus précise de votre poids et de votre santé.</p>
    <p>En utilisant notre calculateur d'IMC, vous pourrez rapidement savoir si vous êtes en surpoids, obèse, ou si votre poids est normal. Vous pourrez également découvrir nos conseils pour maintenir un poids santé et une vie active.</p>
      <p>Il est important de maintenir un poids santé pour réduire les risques de maladies chroniques telles que le diabète, les maladies cardiaques et certains cancers.</p>

      <a class="btn btn-danger btn-lg" href="imc.php" role="button">Calculer mon IMC</a>
    </div>
  </div>

  <!-- Chargement des fichiers JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php } else { ?>
  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - IMC</title>
  
    <!-- Chargement des fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
    <!-- Style personnalisé -->
    <style>
      /* Ajout de styles personnalisés */
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }
  
      .jumbotron {
        background-color: #4B9E9E;
        color: white;
      }
    </style>
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="imc.php">Mon IMC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="MonCompte.php">Mon compte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexion.php">connexion</a>
          </li>
        </ul>
      </div>
    </nav>
  
    <!-- Contenu principal -->
    <div class="container mt-4">
      <div class="jumbotron">
        <h1 class="display-4">Indice de Masse Corporelle</h1>
        <p class="lead">Le calcul de l'IMC est un moyen simple et rapide d'évaluer votre corpulence.</p>
        <hr class="my-4">
        <p>Sur notre site, vous pouvez facilement calculer votre IMC en indiquant votre poids et votre taille. L'IMC est un indicateur simple et couramment utilisé pour évaluer la corpulence d'une personne et déterminer si elle est dans une catégorie de poids saine ou à risque.</p>
      <p>L'IMC ne permet pas de mesurer directement la graisse corporelle ou la répartition de la graisse, qui peuvent également être des facteurs de risque de maladies. C'est pourquoi, il est important de consulter un professionnel de la santé pour obtenir une évaluation plus précise de votre poids et de votre santé.</p>
      <p>En utilisant notre calculateur d'IMC, vous pourrez rapidement savoir si vous êtes en surpoids, obèse, ou si votre poids est normal. Vous pourrez également découvrir nos conseils pour maintenir un poids santé et une vie active.</p>
        <p>Il est important de maintenir un poids santé pour réduire les risques de maladies chroniques telles que le diabète, les maladies cardiaques et certains cancers.</p>
  
        <a class="btn btn-danger btn-lg" href="imc.php" role="button">Calculer mon IMC</a>
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
<?php } ?>