<?php

require_once("config.php");

/*
//Carrega o usuário:
$root = new Usuario();
$root->loadbyId(1);
echo $sql->getList();
*/

//Carrega Lista
//$lista = Usuario::getList();
//echo json_encode($lista);

//Procurar usuário
//$busca = Usuario::search("willian");
//echo json_encode($busca);

//Carrega um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("willian", "lol");

echo $usuario;
?>