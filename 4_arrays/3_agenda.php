<?php
/* Realizar una agenda:
guardar en un array asociativo el nombre de la persona como clave y su número como valor
pista ["clave" => "valor",....] 
Una vez hecho, mostrar el texto "X tiene el número 666666"*/

$agenda = [6657843,6678237,6689872];
$agenda = ["Victor"=> 6657843, "Jose"=> 6678237, "Enol"=> 6689872,];
var_dump($agenda);
echo ("<br>");

foreach ($agenda as $nombre => $numero) {
    echo ($nombre . " tiene el número " . $numero . "<br>");
}