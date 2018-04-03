<?php

require_once("config.php");

/* Lista usuarios do BD
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

$user = new Usuario();

$user->loadbyId(1);

echo $user;

