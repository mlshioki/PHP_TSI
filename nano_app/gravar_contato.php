<?php

require_once 'db.php'; 

//Como evitar SQL injection

$objStmt = $objBanco->prepare('INSERT INTO contatos(nome, telefone) VALUES( :nm, :tel)');

//Passa os valores dados pelo usuário para o banco
$objStmt->bindParam(':nm', $_POST['nm']);
$objStmt->bindParam(':tel', $_POST['tel']);

//Executar 
if($objStmt->execute()){
    $msg = 'Obrigado por se cadastrar';
} else{
    $msg = 'Cadastro inválido, tente novamente';
}

//Chamar o template
include 'gravar_contato_tpl.php';