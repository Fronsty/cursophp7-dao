<?php

require_once("config.php");
// Carrega um usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// //Carrega uma lista de usuário
// $lista = Usuario::getList();
// echo json_encode($lista);

// // Carrega uma lista de usuario buscando pelo login
// $search = Usuario::search("us");
// echo json_encode($search);

//carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("root", "!@#$%");
// echo $usuario;

//Criando um novo usuário

// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

//Alterar usuario

// $usuario = new Usuario();
// $usuario->loadById(14);
// $usuario->update("coordernador", ")(&*&&¨%¨¨%%");
// echo $usuario;

//Deletando usuários

$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;
?>