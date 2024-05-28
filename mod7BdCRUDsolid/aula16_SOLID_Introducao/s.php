<?php
/*
  * Princípio da responsabilidade única ou seja 
  * uma classe tem que ter somente uma responsabilidade
*/

// Essa classe está errada pois ela faz duas coisas
// lida com o objeto usuario e manipula banco também
// famosa Classe Deus que quer fazer tudo.
class Usuarios {
  public function getNome() {
  }
  public function setNome() {
  }
  public function add(Usuario $user) {
  }
  public function update(Usuario $user) {
  }
  public function delete($id) {
  }
}

// Versão correta 
// Essa classe lida apenas com o usuario
class Usuario {
  private $nome;

  public function getNome() {
  }
  public function setNome() {
  }
}

// Essa classe lida com manipulação do usuario no banco de dados

class UsuarioDb {
  public function add(Usuario $user) {
  }
  public function update(Usuario $user) {
  }
  public function delete($id) {
  }
}
