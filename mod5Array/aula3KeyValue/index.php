<?php 
$array = [
  'nome' => 'Pablo',
  'idade' => 90,
  'empresa' => 'B7Web',
  'cor' => 'Azul',
  'profissao' => 'Analista gráfico'
];
/*
$chaves = array_keys($array);
echo '<pre>';
print_r($chaves);
*/

$valores = array_values($array);
echo '<pre>';
print_r($valores);

?>