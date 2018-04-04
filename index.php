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

//$usuario = new Usuario();
//$usuario->login("root","1234");
//echo $usuario;
/*
//Insert de usuario novo
$aluno = new Usuario("Silas", "asdf");

$aluno->insert();

echo  $aluno;
*/
/*
//Alterar um usuario
$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("professor","4321");

echo $usuario;
*/

//Deletando um usuario

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario;