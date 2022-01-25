<?php

$resultat = "<ul>";

for ($cnt=0; $cnt < 100; $cnt+=5) 
{ 
    if ($cnt % 3 == 0)
    {
        $resultat .= "<li> $cnt </li>";
    }
}

$resultat .= "</ul>";

echo $resultat;