<?php

ini_set('displya_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);


$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=cliente';
$user = 'cms';
$password = 'cms';

$db = new PDO($dsn, $user, $password);