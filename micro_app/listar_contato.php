<?php
require_once 'db.php'; 

//Consulta para listar contatos
$tabela = array();

$lista -> sql = 'SELECT id, nome, telefone FROM contatos ORDER BY nome';

foreach ($objBanco->query($lista_sql) as $registro) {
    $tabela[$registro['id']] = ['nome' => $registro['nome'], 
                                'telefone' => t$registro['telefone']];
}

include 'listar_contato_tpl.php';