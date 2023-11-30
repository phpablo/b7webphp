<?php
$array = [
  'nome' => 'Pablo',
  'idade' => 90,
  'empresa' => 'B7Web',
  'cor' => 'Azul',
  'profissao' => 'Analista gráfico',
  'sexo' => 'M'
];
array_splice($array,2,2);
echo '<pre>';
print_r($array);

?>