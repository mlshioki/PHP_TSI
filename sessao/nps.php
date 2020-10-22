<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<br><br> Você deu nota a $nota pelo motivo \"$explicacao\"";

$db = new PDO('mysql:dbname=lsphp;host=localhost','root','');

$stm = $db->prepare(' INSERT INTO nps (nota, explicacao) VALUES (:nota, :explicacao)');

$stm->bindParam(':nota', $nota);
$stm->bindParam(':explicacao', $explicacao);

if ($stm -> execute()) {
    echo '<br><br>Pesquisa gravada com sucesso!';
} else {
    echo '<br><br> deu erro, tente novamente!';
}

echo '<br><br><a href="/.greets.php?nota=$nota">Seguir</a>';