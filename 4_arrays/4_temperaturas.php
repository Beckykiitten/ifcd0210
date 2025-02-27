<?php

/* 
Dado un array con la temperatura media de  cada día de la semana, sacar:
 - la temperatura máxima, 
 - la mínima 
 - y la temperatura media

*/

$temperaturas = [12, 15, 13, 12, 16, 11, 13];
$max = 0;
$min = 20;
$suma = 0;

for ($i=0; $i <count($temperaturas); $i++){
    if ($temperaturas[$i]>$max){
        $max=$temperaturas[$i];
    }
    if ($temperaturas[$i]<$min){
        $min=$temperaturas[$i];
    }
    $suma += $temperaturas[$i];  
}
$media = $suma / count($temperaturas);

echo ("La temperatura máxima de la semana es de ". $max);
echo ("<br>");
echo ("La temperatura mínima de la semana es de ". $min);
echo ("<br>");
echo ("La temperatura media de la semana es de ". round($media,2));