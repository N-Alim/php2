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
