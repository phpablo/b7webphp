<pre>
  <?php 
  echo '<strong>Function mostra em milisegundos tempo de 1970 até hoje</strong></br></br>';
  echo time();
  echo '<hr>';

  
  echo '<strong>Mostra a data</strong></br></br>';
  echo date('d/m/Y H:i:s');
  echo '<hr>';

  
  echo '<strong>Padrão Americano VS Padrão Internacional</strong></br></br>';
  echo 'Padrão Americano: '.date('Y/d/m').'</br>';
  echo 'Padrão Internacional: '.date('Y/m/d');
  echo '<hr>';

  
  echo '<strong>Pega uma String e converte</strong></br></br>';
  $data = '2023-11-14';
  echo date('d/m/Y', strtotime($data));
  echo '<hr>';

  
  
  ?>
</pre>