<?php
session_start();
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=imc_db', 'root', '');


// Vérification des champs de formulaire
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Requête pour vérifier si l'utilisateur existe dans la table utilisateurs
    $requete = "SELECT * FROM utilisateurs WHERE nom_utilisateur = :nom AND mot_de_passe = :mot_de_passe";
    $statement = $pdo->prepare($requete);
    $statement->execute(array(
        ':nom' => $username,
        ':mot_de_passe' => $password
    ));
}

   
    // Si l'utilisateur existe, on redirige vers la page index.php
    if($statement->rowCount() > 0){

        $Utilisateur = $statement->fetch();

        
        $_SESSION['id'] = $Utilisateur['id'];
        $_SESSION['username'] = $Utilisateur['nom_utilisateur'];
        $_SESSION['email'] = $Utilisateur['email'];
        $_SESSION['nom'] = $Utilisateur['nom'];
        $_SESSION['prenom'] = $Utilisateur['prenom'];
        $_SESSION['mot_de_passe'] = $Utilisateur['mot_de_passe'];
        $_SESSION['age'] = $Utilisateur['age'];
        $_SESSION['taille'] = $Utilisateur['taille'];
        $_SESSION['poids'] = $Utilisateur['poids'];


        header("Location: index.php");
        exit;
    } else {
        $_SESSION['message_erreur'] = "nom ou mot de passe incorrect.";
        header("Location: connexion.php");
        
    }

?>