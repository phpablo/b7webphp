<?php 
$array = [
  'nome' => 'Pablo',
  'idade' => 90,
  'empresa' => 'B7Web',
  'cor' => 'Azul',
  'profissao' => 'Analista gráfico'
];

foreach ($array as $key => $value) { 
  echo '<table border="1">';
  echo "<tr><td> $key </td> <td>$value</td></tr>";
  echo '</table>';
}
?>