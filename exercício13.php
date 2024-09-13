<?php

$lista_nomes =['Miguel','Arthur','Gael','Théo','Heitor','Ravi','Davi','Bernardo','Noah','Gabriel'];

$pesquisador = "Davi";

$indice = in_array($pesquisador, $lista_nomes);

if(array_search($pesquisador, $lista_nomes)) {
    echo "O item $pesquisador existe nesta lista, e está na posição" . $indice;
}
else {
    echo "O item $pesquisador não existe nesta lista";
}





?>