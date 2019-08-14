<?php
require_once("config.php");

// Carrega um usuario

//$root = new Usuario();

//$root->loadById(2);

//echo $root;

//=======================================

//Carrega uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);

//========================================

//Carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);

//=======================================

// Carrega um usuario usando login e senha.
//$usuario = new Usuario();

//$usuario->login("Marivaldo", "123456");

//echo $usuario;

//======================================

//Insere um usuario no banco de dados.

//$aluno = new Usuario();

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();

//echo $aluno;

//=========================================
// Alterar um Usuario.
/*$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("Professor", "brasil123");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo $usuario;

?>