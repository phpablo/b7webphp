<?php
// setar o cookie em time negativo, reseta ele
setcookie('nome', '', time() - 3600);
header('Location: index.php');
exit;
