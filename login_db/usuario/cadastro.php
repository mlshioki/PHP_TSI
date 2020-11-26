<?php

require 'model/dados.php';

if ( isset($_POST['cadastrar']) ) { 

	require 'controller/consist_cadastro.php';

	$id = gravar_usuario($_POST['nome'], $_POST['email'], $_POST['senha']);

	if ($id) {

		session_start();

		$_SESSION['login'] = $_POST['email'];

		header('location: ../');

	} else {

		$erros = ['Não foi possível criar o usuário'];
	}

}  else {
	
	$erros =[];
}

include 'view/cadastro_tpl.php';