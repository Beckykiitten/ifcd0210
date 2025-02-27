<?php

/* Mostrar la tabla de multiplicar del 7 por pantalla. 
Opcional: realizarlo dentro de una tabla HTML */

$numero = 0;

echo ("<table");
echo ("<thead>Tabla del 7</thead>");
    while ($numero <= 10) {

        $resultado = $numero *7;
        echo ("<tr><td>$numero X 7</td> <td>$resultado</td>");
        $numero++;
    }
("</table>");