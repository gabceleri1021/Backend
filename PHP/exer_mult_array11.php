<?php
$Cadastro = [];

$Cadastro ['usuario'] = ['João','Maria','Pedro'];
$Cadastro['senha'] = ['1234','abcd','5678'];

echo'<pre>';
print_r($Cadastro);
echo '</pre>';
echo '<hr>';

$Cadastro ['usuario'][1] = 'Ana';

$Cadastro ['senha'][1] = 'efgh';

echo'<pre>';
print_r($Cadastro);
echo '</pre>';
echo '<hr>';







?>