<h1> Je fais du PHP </h1>

<?php

require_once "fonctions.php";
require_once "constantes.php";

var_dump(TVA);

/*
__LINE__
__DIR__
__FILE__
__FUNCTION__
*/

echo "<p>Afficher n° ligne: " . __DIR__ . "</p>";

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

$surface = surfaceRect(10, 50);
var_dump($surface);

$volume = volumeParallepipede(10 , 60, 81);
var_dump($volume);

?>

<p><a href="boucles.php">Boucles</a></p>
<p><a href="inclusions.php">Inclusions</a></p>