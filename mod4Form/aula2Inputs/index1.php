<?php
require 'header1.php';
?>

<form action="recebedor1.php" method="GET">
  <label>
    Nome:
    <br />
    <input type="text" name="nome">
  </label>
  <br />
  <br />

  <label>
    Idade:
    <br />
    <input type="text" name="idade" id>
  </label>
  <br />
  <br />

  <label>
    Email:
    <br>
    <input type="email" name="email">
  </label>
  <br />
  <br />

  <input type="submit" value="Enviar" />
</form>