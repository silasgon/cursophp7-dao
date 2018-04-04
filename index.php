<?php

require_once("config.php");

/* Carrega um usuario
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);


$user = new Usuario();

$user->loadbyId(1);

echo $user;
*/

//Lista de usuarios

//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios pelo login

//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando logine a senha

$usuario = new Usuario();
$usuario->login("root","1234");
echo $usuario;
