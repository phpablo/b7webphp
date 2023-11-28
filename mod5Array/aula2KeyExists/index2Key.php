<?php 
$array = [
  'nome' => 'Pablo',
  'idade' => 90,
  'empresa' => 'B7Web',
  'cor' => 'Azul',
  'profissao' => 'Analista gráfico'
];

if (key_exists('idade', $array)) {
  // ===================
  //   Mostra a idade
  // =================== 
  // $idade = $array['idade'];
  // echo $idade.' anos de idade';
  
  // ====================
  //   Mostra a o array
  // ====================
  echo '<pre>';
  print_r($array);
}else {
  echo 'Não existe uma idade';
}

?>