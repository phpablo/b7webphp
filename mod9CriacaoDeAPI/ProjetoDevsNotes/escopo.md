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

  -> (GET) /api/notes
  -> (GET) /api/note/123
  -> (POST) /api/note (Title, Body)
  -> (PUT) /api/note/123 (Title, Body)
  -> (DELETE ) /api/note/123