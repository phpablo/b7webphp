<?php $render('header'); ?>


<h2><a href="<?php $base; ?>novo">Novo Usuário</a></h2>

<table border="1px" width="100%">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>ACOES</th>
  </tr>

  <?php foreach ($usuarios as $usuario) : ?>

    <tr>
      <td><?= $usuario['id']; ?></td>
      <td><?= $usuario['nome']; ?></td>
      <td><?= $usuario['email']; ?></td>
      <td>
        <a href="<?php $base; ?>usuario/<?= $usuario['id'] ?>/Editar">[Editar]</a>
        <a href="<?php $base; ?>usuario/<?= $usuario['id'] ?>/Excluir">[Excluir]</a>
      </td>
    </tr>

  <?php endforeach; ?>

</table>

<?php $render('footer'); ?>