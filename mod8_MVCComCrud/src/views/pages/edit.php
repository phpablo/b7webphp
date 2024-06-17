<?php $render('header'); ?>

<h2>Editar usuario</h2>

<form action="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar" method="POST">
  <label for="">Nome: <br>
    <input type="text" name="name" value="<?= $usuario['nome']; ?>">
  </label> <br> <br>

  <label for="email">Email: <br>
    <input type="email" id="email" name="email" value="<?= $usuario['email']; ?>">
  </label> <br> <br>

  <input type="submit" value="Salvar">
</form>

<?php $render('footer'); ?>