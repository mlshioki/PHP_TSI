<?php
session_start();

echo 'você é o:'.$_SESSION['nome'].'<br><br>';

$nota = $_GET['nota'];
$protocolo = $_GET['protocolo'];

if ($nota >= 9) {
    echo "Estamos muito felizes!";
} else {
    echo "o que podemos fazer para dar nota 10?";
}
echo "<br><br>Se protocolo é o $protocolo";