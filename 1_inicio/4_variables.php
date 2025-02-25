 <?php

 $cadena1 = "Aquí tenemos una variable tipo string";
 $cadena2 = " a la cual le concatenaremos este texto.";
 $entero1 = 25;
 $entero2 = 5;
 $booleano = true;

 $cadenas_concatenadas = $cadena1 . $cadena2;
 echo ($cadenas_concatenadas); 
 echo ("<br>");
 echo($cadena1 . " con otro ejemplo de concatenación.");
 echo ("<br>");

 $suma = $entero1 + $entero2;
 echo ($suma); 
 echo ("<br>");

 $division = $entero1 / $entero2;
 echo ($division); 
 echo ("<br>");

 $resto = $entero1 % $entero2;
 echo ($resto); 
 echo ("<br>");

if ($entero1 > $entero2){
    echo ("El primer número es mayor que el segundo número");
} elseif ($entero1 == $entero2){
    echo ("Ambos números son iguales");
} else {
    echo ("El primer número es menor que el segundo número");
}
echo ("<br>");

 ?>

 
 
 
 
 
 
 
 <!-- Crear un fichero php donde se creen las siguiente variables
una variable con un string
dos variables con números enteros
una variable booleana

Posteriormente realizar las siguientes operaciones (mostrándolas con un echo):
concatenar la variable string con otro texto
sumar ambos números
dividir los números
hallar el módulo de los números (el resto de dividir uno entre otro)
ver si uno de los números es mayor o igual que el otro
mostrar la variable booleana
negar la variable booleana
 -->