<?php
session_start();

if ($_SESSION['message_erreur'] == "Veuillez vous connecter pour accéder à cette page.") {
    header("location: connexion.php");
}
else {
    header("location: connexion.php");
    session_destroy();
}



?>