<?php

/* Crear un programa que muestre por pantalla los números del 1 al 10. 
Opcional: mostrar los números dentro de una lista desordenada HTML. */
echo ("<ul>");
    for ($numero = 1; $numero <=10; $numero++){
    
        echo "<li>$numero</li>";
    }
echo ("</ul>");
