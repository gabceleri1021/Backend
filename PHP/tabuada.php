<?php

function tabuada ($numero, $conta) {
return $numero * $conta;
    
}
 $conta = 2;
for ($numero = 1; $numero <=10; $numero++) {
    $resultado = tabuada($numero, $conta);
    echo "$numero x $conta = $resultado <br>";
}



























?>