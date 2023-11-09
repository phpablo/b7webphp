<pre>
  <?php 
  echo '<h2>Funções de String Part II</h2>';
  echo '<hr/>';
  $nomeCompleto = 'Pablo Henrique Lima de Araujo';
  
  $posicao = strpos($nomeCompleto, 'Pa');
  echo '<h3>Verifica se existe UMA SENTENÇA numa string</h3>';
  if ($posicao > -1) {
    echo 'ACHOU!';
  }else {
    echo 'NÃO ACHOU';
  }
  echo '<hr/>';
  echo '<h3>Tranforma a PRIMEIRA letra em MAIÚSCULA</h3>';
  $nomeCompleto = 'pablo henrique lima de araújo';
  echo ucfirst($nomeCompleto);
  echo '<h3>Tranforma a PRIMEIRA letra de CADA PALAVRA em MAIÚSCULA</h3>';
  echo ucwords($nomeCompleto);
  echo '<hr/>';
  echo '<h3>Cada nome fica num índice de um array</h3>';
  $nomes = explode(' ',$nomeCompleto);
  
  print_r($nomes);
  echo '<hr/>';
  echo '<h3>Formatar números</h3>';
  $numero = 1320.80;
  echo number_format($numero,2,',','.');
  echo '<hr/>';
  
  
  ?>
</pre