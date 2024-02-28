<?php
// classe com atributos de um post 
class Post { // Aqui é uma classe
  public $likes = 0;
  public $comments = [];
  public $author;

  public function aumentarLikes() {
    return $this->likes++;
  }
}

// cria um objeto da classe Post 
$post1 = new Post(); // Isso é um objeto
$post1->aumentarLikes();

// $post1

// Escreve na tela o conteúdo do atritubo likes setados anteriormente
echo 'Post 1 tem ' . $post1->likes . ' likes.<br><hr>';