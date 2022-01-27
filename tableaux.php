<?php

include "fonctions.php";

$eleves = array("Michel", "Patrick", "Bob");
$ages = [56, 42, 20];

$test = [1, 2, 3, [4, 5, 6, [7, 8, 9], 10, 11, 12], 13, 14, 15];

dump($eleves);

echo listAffichage($test);