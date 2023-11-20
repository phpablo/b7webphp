<?php
session_start();
//$_SESSION['nome'] = false; Funciona mas está incorreto
unset($_SESSION['nome']); //Forma correta de logout
header('Location: index.php');
