<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio dos Traços 2</title>
</head>

<body>
  <?php
  $l = 0;
  for ($l = 0; $l < 20; $l++) {
    for ($i = 0; $i < $l; $i++) {
      echo '<strong> - <strong/>';
    }
    echo '<br/>';
  }
  ?>
</body>

</html>