<?php 
echo '<strong>Exercício Dia da Semana</strong></br>';
echo '<hr>';

function diaSemana ($data) {
  
  $dia = date('D',strtotime($data));
  
  switch ($dia) {
    case 'Mon':
      echo 'Segunda';
      break;
    
    case 'Tue':
      echo 'Terça';
      break;
    
    case 'Wed':
      echo 'Quarta';
      break;
    
    case 'Thu':
      echo 'Quinta';
      break;
    
    case 'Fri':
      echo 'Sexta';
      break;
    
    case 'Sat':
      echo 'Sábado';
      break;
    
    case 'Sun':
      echo 'Domingo';
      break;
    default:
      echo 'Dia Inexiste';
      break;
  }
  
};

echo diaSemana('14-11-2023');



?>