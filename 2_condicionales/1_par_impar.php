<!-- crear un fichero que muestre un número aleatorio entre 1 y 100.
 Además debe decir si es par o impar. 
 Utilizar constantes para el mínimo y el máximo
  -->
 <?php 
 
define("MIN",1);
define("MAX",100);

$numero = rand(MIN,MAX);
echo $numero;
echo ("<br>");

if ($numero % 2 == 0){
    echo ("El número es par");
} else {
echo ("El número es impar");
}