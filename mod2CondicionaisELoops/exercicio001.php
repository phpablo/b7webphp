<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio dos Traços</title>
</head>

<body>
  <?php
  // Criei 2 variáveis, uma para cada loop 
  $l = 0;
  $i = 0;
  // O primeiro loop faz uma iteração na variável $l 
  for ($l = 0; $l < 10; $l++) {
    // Essa repetição vai verificar $i 
    // a cada loop ele escreve um '-', qnd $i chega a 10 ele sai do loop
    for ($i = 0; $i < 10; $i++) {
      echo '<strong> - <strong/>';
    }
    // saindo do loop ele mostra na tela 10 traços e pula uma linha
    echo '<br/>';
    //Logo verifica $l que foi iterado no 1º loop e refaz tudo denovo 
    // Resultado será uma segunda linha com 10 traços e quebra de linha 
    // Finalizando o programa com 10 linhas , com 10 traços cada
  }


  ?>
</body>

</html>