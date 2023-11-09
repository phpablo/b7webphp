<pre>
  <?php 
  echo '<h2>Funções Nativas de Array Parte I</h2>';
  echo '<hr/>';
  
  $lista = ['Goku', 'Gohan', 'Bulma', 'Kuririn' ];
  echo '<p><strong>Mostra total de ítens do array</strong></p>';
  echo 'Total: '.count($lista);
  echo '<hr/>';
  
  echo '<p><strong>Compara indices de 2 arrays; Mostra quem não está no segundo array</strong></p>';
  $alunos = ['Goku', 'Gohan', 'Bulma', 'Kuririn','Harry', 'Hermione' ];
  $aprovados = ['Harry', 'Hermione','Bulma' ];
  $reprovados = array_diff($alunos,$aprovados);
  echo 'Alunos: <br/>';
  print_r($alunos);
  echo 'Aprovados: <br/>';
  print_r($aprovados);
  echo 'Reprovados: <br/>';
  print_r($reprovados);
  echo '<hr/>';

  echo '<p><strong>Filtra um array|Retorna True or False|Pode passa uma func cm parâmentro</strong></p>';
  $numeros = [2,5,6,78,23,55];

  $filtrados = array_filter($numeros,function($item){
    if ($item < 30) {
      return true;
    }else {
      return false;
    }
  });
  print_r($filtrados);
  echo '<hr/>';
  echo '<p><strong>Funcao executa algo em cada índice do array[Ex: Dobra o valor]</strong></p>';
  $numeros = [2,5,6,78,23,55];
  $dobrados = array_map(function($item){
    return $item * 2;
  },$numeros);
  print_r($dobrados);
  echo '<hr/>';
  ?>
</pre>