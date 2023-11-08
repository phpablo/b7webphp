<?php

$ingredientes = [
  'açucar',
  'farinha de trigo',
  'ovo',
  'leite',
  'fermento em pó'
];
?>
<ul></ul>
<?php 
foreach ($ingredientes as $chave => $valor) {
  echo '<li>Item' . $chave . ':' . $valor . '<li/><br/>';
};
?>