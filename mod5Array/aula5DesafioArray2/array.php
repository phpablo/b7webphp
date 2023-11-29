<?php
$array = [
  'nome' => 'Pablo',
  'idade' => 90,
  'empresa' => 'B7Web',
  'cor' => 'Azul',
  'profissao' => 'Analista gráfico',
  'sexo' => 'M'
];

$chaves = array_keys($array);
$valores = array_values($array);
?>
<table border="1">
  <tr>
    <?php 
      foreach ($chaves as $chave): ?>
    <th><?php echo $chave;?></th>
    <?php endforeach; ?>
  </tr>
  <tr>
    <?php foreach($valores as $valor):?>
    <td><?php echo $valor?></td>
    <?php endforeach ?>
  </tr>
</table>





<?php
// ========================================================
// $col = implode('<th>', array_keys($array));
// echo '<table border="1">';
// echo $col;
// foreach ($array as $key => $value) {
// echo "<td>
// $value
// </td>";
// echo '</table>';
// }
?>