<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcões, parâmetros e Includes</title>
</head>

<body>
  <h1>Funcões</h1>
  <hr>
  <?php
  $dizimo = function (int $valor) {
    return $valor * 0.1;
  };
  $funcao = $dizimo;

  echo $funcao(80);
  // function somar($n1, $n2) {
  //   $total = $n1 + $n2;
  //   return $total;
  // }
  // Retornar o resultado da função passando 2 parâmetros
  // echo somar(3, 7) . '<br/>';
  // Retornar 10% do input 
  ?>
  <hr>

</body>

</html>