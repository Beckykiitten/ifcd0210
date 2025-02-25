<?php

$random = rand(1,100);

echo ("<h1>¿Cara o cruz?</h1>");

if($random > 50){
    echo ("<p style='color:red'>cara</p>");
} else {
    echo("<p style='color:blue'>cruz</p>");
}

?>
<!--  TERNARIA
$text = $random > 50 ? "cara" : "cruz";
El texto random es > que 50? entonces imprime cara, si no imprime cruz. -->