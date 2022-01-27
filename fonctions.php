<?php

function bonjour()
{
    echo "Bonjour !";
}

function bonjourPerso(string $nom) : string
{
    return "Bonjour $nom";
}

function surfaceRect(float $longueur, float $largeur) : float
{
    return abs($longueur * $largeur);
}

function volumeParallepipede(float $longueur, float $largeur, float $hauteur) : float
{
    return abs($longueur * $largeur * $hauteur);
}

function dump($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}

function listAffichage(Array $tab) : string
{
    $result = "<ul>";
    for ($cnt = 0; $cnt < count($tab); ++$cnt)
    {
        if (is_array($tab[$cnt]))
        {
            $result .= listAffichage($tab[$cnt]);
            // $result .= "<li>Ce n'est pas un tableau</li>"
        }
        else
        {
            $result .= "<li>" . $tab[$cnt] . "</li>";
        }
    }

    $result .= "</ul>";

    return $result;
}
