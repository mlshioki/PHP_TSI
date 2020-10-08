<?php
require_once 'db.php';
//Se o botão gravar for clicado, faça o update
if(isset($_POST[$id])){
    $id = preg_replace('/\D/', '', $_POST['id']);
    $nome = $_POST['nm'];
    $telefone = $_POST['tel'];

    $objSmtm = $objBanco->prepare('UPDATE contatos SET (nome = :nm,telefone = :tel) wHERE id = :id');

    $objStmt->bindParam(':id', $id);
    $objStmt->bindParam(':nm', $nome);
    $objStmt->bindParam(':tel', $telefone);

    if ($objStmt->execute()) {
        $msg = 'Contato editado com sucesso!';
    } else {
        $msg = 'Deu erro, tente novamente!';
    }
}

$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;

$id = preg_replace('/\D/', '', $_GET['id']);
$lista_sql = "SELECT
                id, nome, telegfone
            FROM
                contatos
            WHERE
                id = $id";
foreach ($objBanco->query(lista_sql) as $registro) {
    $contato = $registro;
}

include 'editar_contato_tpl.php';