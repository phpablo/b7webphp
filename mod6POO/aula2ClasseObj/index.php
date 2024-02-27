<?php
// classe com atributos de um post 
class Post { // Aqui é uma classe
  public $likes = 0;
  public $comments = [];
  public $author;
}

// cria um objeto da classe Post 
$post1 = new Post(); // Isso é um objeto

// seta um valor para o atributo like 
$post1->likes = 3;

//Instancia um objeto da classe post
$post2 = new Post();

// Seta um valor de uma propriedade do objeto
$post2->likes = 7;

// Escreve na tela o conteúdo do atritubo likes setados anteriormente
echo 'Post 1 tem ' . $post1->likes . ' likes.<br><hr>';
echo 'Post 2 tem ' . $post2->likes . ' likes.<br>';
