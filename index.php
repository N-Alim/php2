<h1> Je fais du PHP </h1>

<?php

require_once "fonctions.php";

$greetings = bonjourPerso(42);

echo $greetings;

$valeur = "";
$resultat = "";


if (is_numeric($valeur))
{
    switch ($valeur)
    {
        case ($valeur > 0):
            $resultat = "positive";
            break;

        case ($valeur > 0):
            $resultat = "négative";
            break;

        default:
            $resultat = "nulle";
    }
}

else 
{
    $resultat = "non numérique";
}

echo "<p>La variable est $resultat</p>"; 


// $resultat = ($valeur > 0) ? "positive" : (($valeur < 0) ? "négative" : "nulle");

?>

<p><a href="boucles.php">Boucles</a></p>
<p><a href="inclusions.php">Inclusions</a></p>