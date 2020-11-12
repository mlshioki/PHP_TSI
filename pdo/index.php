<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'mysql:dbname=cms;host=dockerhost';//trocar dockerhost para localhost

//Tutorial para instalação dos drivers: 
//https://hcode.com.br/blog/instalando-sql-server-e-conectando-com-php

//DSN para SQL Server
//$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=MyDatabase';

$user = 'cms';
$password = 'cms';

$db = new PDO($dsn, $user, $password);

$sql = 'SELECT nome, telefone FROM cliente';

$r = $db->query($sql);

 echo "<pre>";

 while ($registro = $r->fetch(PDO::FETCH_ASSOC)){
	echo "Sr(a) {$registro['nome']}, seu telefone {$registro['telefone']} será bloqueado se a conta não for paga \n\n";
 }

  //Como fazer um DELETE
 if ($db->query('DELETE FROM cliente where id = 1')){
     echo "ID 1 apagado com sucesso!";
 } else {
     echo "Erro ao tentar apagar o ID 1";
 }

  //Como fazer um SELECT
 foreach ($db->query($sql) as $registro){
	echo "Sr(a) {$registro['nome']}, seu telefone {$registro['telefone']} será bloqueado se a conta não for paga \n\n";
}

//Como fazer um UPDATE
 if ($db->query('UPDATE cliente SET nome = "Hioki" WHERE id = 3')){
     echo "ID 3 atualzado com sucesso!!";
 }else {
     echo "Erro ao tentar atualizar o ID 3";
 }

 foreach ($db -> query($sql) as $registro){
	echo "Sr(a) {$registro['nome']}, seu telefone {$registro['telefone']} será bloqueado se a conta não for paga \n\n";
 }

 //Como fazer um INSERT
if ($db->query(' INSERT INTO cliente (id, nome, telefone) VALUES (2, "Sayuri", 11437476132)')) {
     echo "ID 2 gerado novamente com sucesso!\n\n";
 } else {
     echo "Erro ao tentar gerar novamente o ID 2";
 }

 foreach ($db->query($sql) as $registro) {
     echo "Sr(a) {$registro['nome']}, seu telefone {$registro['telefone']} será bloqueado se a conta não for paga \n\n";
 }