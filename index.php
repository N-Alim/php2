<h1> Je fais du PHP </h1>

<?php

$valeur = "";
$resultat = "";


if (is_numeric($valeur))
{
    if ($valeur > 0)
    {
        $resultat = "positive";
    }
    else if ($valeur < 0)
    {
        $resultat = "négative";
    }
    
    else
    {
        $resultat = "nulle";
    }
}

else 
{
    $resultat = "non numérique"
}

echo "<p>La variable est $resultat<p/>"; 


// $resultat = ($valeur > 0) ? "positive" : (($valeur < 0) ? "négative" : "nulle");
