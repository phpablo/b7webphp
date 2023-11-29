<?php
$array = [
  'nome' => 'Pablo',
  'idade' => 90,
  'empresa' => 'B7Web',
  'cor' => 'Azul',
  'profissao' => 'Analista gráfico',
  'sexo' => 'M'
];
// Retorna parte do array, @param {start da contagem}, {Qtd de itens retornados}
$retorno = array_slice($array, 3, 2);
echo '<pre>';
print_r($retorno);
echo '</pre>';
?>