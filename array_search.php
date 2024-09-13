<?php
//Exemplos de array_search (13/09/2024)

$frutas =['maça','banana','uva'];

$pesquisa = "uva";

$indice = array_search($pesquisa, $frutas);


if($indice <> false ) {
    echo "$pesquisa foi encontrada na posição " . $indice;
}
else {
    echo "$pesquisa não foi encontrado na lista de frutas.";
}














?>