<?php

require_once './config.php'; 

$objBanco = new PDO( DSN, DB_USER, DB_PASS);

$consulta = $objBanco->query('SELECT id, nome, telefone FROM contatos', PDO::FETCH_ASSOC);

// var_dump($objBanco->errorInfo()); *importante para debug*

$apagar = $objBanco->query('DELETE FROM contatos WHERE id = 1');

foreach ($consulta as $registro) {
    echo "ID: {$registro['id']} Nome: {$registro['nome']} Telefone: {$registro['telefone']} <br>";
}

if ($objBanco->query('DELETE FROM contatos WHERE id=4')){
    echo "<br>Registro apagado!<br>";
}

if ($objBanco->query("INSERT INTO contatos (nome, telefone) VALUES ('{$_POST['nome']}', '{$_POST['tel']}')")) {
    echo "Contato inserido com sucesso<br>";
}

