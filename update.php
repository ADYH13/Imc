<?php
session_start();
// informations de connexion à la base de données
$servername = "localhost"; // nom du serveur
$username = "root"; // nom d'utilisateur
$password = ""; // mot de passe
$dbname = "imc_db"; // nom de la base de données

// création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// récupération des données du formulaire
$first_name = $_POST['prenom'];
$last_name = $_POST['nom'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$height = $_POST['taille'];
$weight = $_POST['poids'];
$age = $_POST['age'];
$id = $_SESSION['id'];

// préparation de la requête SQL pour l'insertion des données dans la table
$sql = "UPDATE utilisateurs SET nom='$last_name', prenom='$first_name', email='$email', mot_de_passe='$password', nom_utilisateur='$username', taille='$height', poids='$weight', age='$age' WHERE id = '$id' ";

// exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['nom'] = $last_name;
    $_SESSION['prenom'] = $first_name;
    $_SESSION['mot_de_passe'] = $password;
    $_SESSION['age'] = $age;
    $_SESSION['taille'] = $height;
    $_SESSION['poids'] = $weight;
    header("Location: MonCompte.php");
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// fermeture de la connexion à la base de données
$conn->close();
?>
