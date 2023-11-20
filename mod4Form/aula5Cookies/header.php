<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <h1>Testando Formulários</h1>
  <a href="index.php"> || HOME ||</a>
  <a href="apagar.php"> || APAGAR $_COOKIE ||</a>
  <hr>
  <?php
  if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo '<h2>' . $nome . '</h2>';
    echo '<hr/>';
  }
  ?>
</body>

</html>