<!-- Array Reduce Funçao :Ela pega um array que mandar pra ela, e executa uma função em cada item do array -->
<?php
$numeros = [1,2,3,4,5,6,7];

$total = array_reduce($numeros,'somar');

function somar($subTotal,$item){
  $subTotal += $item;

  return $subTotal;
}


echo '<pre>';
print_r($total);

?>