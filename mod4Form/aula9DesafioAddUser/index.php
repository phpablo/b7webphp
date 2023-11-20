<form action="user.php" method="GET">
  <label>
    Novo usuário: <br>
    <input type="text" name="nome" placeholder="Jhon das Neves">
    <br />
    <br />
  </label>
  <input type="submit" value="Cadastrar" />
</form>

<section>
  <div>
    <h1>Lista de usuários</h1>
    <?php
    // Carrega a lista de usuários
    $users = file('usuarios.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (!empty($users)) {
      echo '<ul>';
      foreach ($users as $user) {
        echo '<li>' . htmlspecialchars($user) . '</li>';
      }
      echo '</ul>';
    } else {
      echo '<p>Nenhum usuário cadastrado.</p>';
    }
    ?>
  </div>
</section>