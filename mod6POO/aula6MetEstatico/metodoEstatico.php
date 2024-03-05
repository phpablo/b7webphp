<?php
class MinhaClasse {
  // Método estático que retorna uma mensagem
  public static function mensagemEstatica() {
    return "Este é um método estático!";
  }
}

// Chamando o método estático diretamente na classe, sem instanciar um objeto
echo MinhaClasse::mensagemEstatica();
