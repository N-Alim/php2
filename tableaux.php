<?php

include "fonctions.php";

$eleves = array("Michel", "Patrick", "Bob");
$ages = [56, 42, 20];

$test = [1, 2, 3, [4, 5, 6, [7, 8, 9], 10, 11, 12], 13, 14, 15];

dump($eleves);

echo listAffichage($test);

echo factorielle(5);

$stagiaires = ["Mathilde" => 27, "Pierre" => 30, "Raymonde" => 72];

$stagiaires["Jean-Louis"] = 48;

dump($stagiaires);

foreach ($stagiaires as $key => $value) 
{
    echo $key . " a " . $value . " ans<br/>";
}