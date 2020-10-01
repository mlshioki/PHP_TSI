<?php

require_once 'config.php'; 

//Exemplo de try e catch para tratamento de erros
try{
$objBanco = new PDO( DSN, DB_USER, DB_PASS);
}catch(PDOException $objErro){
    echo 'SGBD indisponível: ' . $objErro->getMessage();
    exit();
}