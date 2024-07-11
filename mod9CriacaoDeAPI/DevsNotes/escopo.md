# DEVS NOTES : SEU SISTEMA DE ANOTAÇÕES SIMPLES

# O que o projeto precisa ?

  -> Listar as anotações.
  -> Pegar informações de UMA anotação.
  -> Inserir uma anotação nova.
  -> Atualizar uma anotaçã existente.
  -> Deletar uma anotação.

# Qual a estrutura de dados ?

  -> Local para armazenar as anotações
    -> ID
    -> Title
    -> Body

# Quais os endpoints ?

  -> (GET) /api/notes -      /api/getall.php 
  -> (GET) /api/note/123 -   /api/get.php?id=123
  -> (POST) /api/note -      /api/insert.php (id, Title, Body)
  -> (PUT) /api/note/123     /api/update.php (id, Title, Body)
  -> (DELETE ) /api/note/123 /api/delete.php (id)