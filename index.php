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
$usuario = new Usuario();
$usuario->login("root", "!@#$%");
echo $usuario;
?>