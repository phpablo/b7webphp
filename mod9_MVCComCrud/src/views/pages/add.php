<?php $render('header'); ?>

<h2>Adicionar novo usuario</h2>

<form action="<?php $base; ?>novo" method="POST">
  <label for="">Nome: <br>
    <input type="text" name="name">
  </label> <br> <br>

  <label for="email">Email: <br>
    <input type="email" id="email" name="email">
  </label> <br> <br>

  <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>