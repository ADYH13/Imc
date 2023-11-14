<?php
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
$first_name = $_POST['inputFirstName'];
$last_name = $_POST['inputLastName'];
$username = $_POST['inputUsername'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
$height = $_POST['inputheight'];
$weight = $_POST['inputweight'];
$age = $_POST['inputAge'];

// préparation de la requête SQL pour l'insertion des données dans la table
$sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, nom_utilisateur, taille, poids, age) 
VALUES ('$first_name', '$last_name', '$email', '$password', '$username', '$height', '$weight', '$age')";

// exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    
     // Définir la session pour l'utilisateur
     session_start();
     $_SESSION['id'] = $Utilisateur['id'];
     $_SESSION['username'] = $username;
     $_SESSION['email'] = $email;
     $_SESSION['nom'] = $last_name;
     $_SESSION['prenom'] = $first_name;
     $_SESSION['mot_de_passe'] = $password;
     $_SESSION['age'] = $age;
     $_SESSION['taille'] = $height;
     $_SESSION['poids'] = $weight;

    header("Location: index.php");
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// fermeture de la connexion à la base de données
$conn->close();
?>
