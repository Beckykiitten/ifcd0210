<?php
/* Usando el mismo array del ejercicio anterior, 
iterarlo con un bucle for y hacer un echo del contenido del array.
Opcional: Hacer lo mismo con un foreach*/

$lista_compra=["pan","leche","queso","pizzas","lomo","frutas"];
for($i=0;$i<count($lista_compra);$i++){
    echo $lista_compra[$i]."<br>";
}
echo "<hr>";

foreach ($lista_compra as $item) {
    echo "<input type='checkbox'>".$item . "<br>";
}