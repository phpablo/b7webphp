<?php

/**
 * Dependência 
 */

interface DBConnection {

  public function connect();
}
class MySQLConnection implements DBConnection {

  public function connect() {
  }
}
class OracleConnection implements DBConnection {

  public function connect() {
  }
}

class UsuarioDAO {
  private $db;

  public function __construct(DBConnection $dbCon) {
    $this->db = $dbCon;
  }
}

$dbCon = new OracleConnection();

$usuarioDAO = new UsuarioDAO($dbCon);
$usuarioDAO2 = new UsuarioDAO($dbCon);
