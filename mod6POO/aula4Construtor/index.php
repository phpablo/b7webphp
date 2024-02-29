<?php
// classe com atributos de um post 
class Post { // Aqui é uma classe
  public int $likes = 0; // int = agora só recebe tipo INT
  public array $comments = []; // ARRAY = agora só recebe tipo ARRAY
  public string $author; // STRING = agora só recebe tipo STRING, mas se digitar '10', ele recebe, mas como string 

  public function __construct($qtdLikes = 0) {
    $this->likes = $qtdLikes;
  }

  public function aumentarLikes() {
    $this->likes++;
  }
}

// cria um objeto da classe Post 
$post1 = new Post(20); // Isso é um objeto
// cria um objeto da classe Post 
$post2 = new Post(); // Isso é um objeto


// Escreve na tela o conteúdo do atritubo likes setados anteriormente
echo 'Post 1 tem ' . $post1->likes . ' likes.<br><hr>';
echo 'Post 2 tem ' . $post2->likes . ' likes.<br><hr>';