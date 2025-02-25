 <?php

 $tecla = "w";

 switch ($tecla){

    case "w":
        echo ("Adelante");
        break;

    case "a": 
        echo ("Izquierda");
        break;
    
    case "s": 
        echo ("Atrás");
        break;
    
    case "d": 
        echo ("Derecha");
        break;
    
        default:
        echo ("Valor no válido");
        break;

 }
 /* Crear un programa que emule los controles de un videojuego:
 Si pulso W: texto "adelante"
 Si pulso A: texto "izquierda"
 Si pulso S: texto "atrás"
 Si pulso D: texto "derecha" */
 