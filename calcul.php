<?php 
session_start();
if (isset($_POST['poids']) && isset($_POST['taille'])) {
    $poids = $_POST['poids'];
    $taille = $_POST['taille'];

    // Convertir le poids et la taille en nombres
    $poids = floatval($poids);
    $taille = floatval($taille)/100;

    // Vérifier si le poids et la taille sont valides
    if (is_nan($poids) || $poids <= 0 || is_nan($taille) || $taille <= 0) {
        return null;
    }

    else{
        // Calculer l'IMC
        $imc = $poids / ($taille * $taille);

        // Arrondir à 1 chiffre après la virgule
        $imc = round($imc * 10) / 10;

        if ($imc < 18.5) {
            $resultat = "Votre IMC est : " . $imc . "</br>Vous êtes en situation de maigreur, il est important d'adopter une alimentation équilibrée et de consulter un médecin si vous perdez du poids sans raison apparente.";
        } else if ($imc >= 18.5 && $imc < 25) {
            $resultat = "Votre IMC est : " . $imc . "</br>Votre IMC est dans la norme. Continuez à maintenir une alimentation saine et équilibrée ainsi qu'une activité physique régulière.";
        } else if ($imc >= 25 && $imc < 30) {
            $resultat = "Votre IMC est : " . $imc . "</br>Vous êtes en surpoids, il est important de modifier votre alimentation en limitant les graisses et les sucres et en privilégiant les fruits et légumes, et de pratiquer une activité physique régulière.";
        } else if ($imc >= 30 && $imc < 35) {
            $resultat = "Votre IMC est : " . $imc . "</br>Vous êtes en obésité modérée, il est recommandé de consulter un professionnel de la santé pour mettre en place un programme d'activité physique et une alimentation adaptée.";
        } else if ($imc >= 35 && $imc < 40) {
            $resultat = "Votre IMC est : " . $imc . "</br>Vous êtes en obésité sévère, il est recommandé de consulter un professionnel de la santé pour mettre en place un programme d'activité physique et une alimentation adaptée.";
        } else {
            $resultat = "Votre IMC est : " . $imc . "</br>Vous êtes en obésité morbide, il est recommandé de consulter un professionnel de la santé pour mettre en place un programme d'activité physique et une alimentation adaptée. Il peut également être nécessaire d'envisager une intervention chirurgicale.";   
        }

        $_SESSION['resultat'] = $resultat;

        header("location: imc.php");
    }
}

else{
    echo "erreur";
}



?>