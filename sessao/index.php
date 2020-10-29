<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();//criar o cookie para inserir na maquina do usuario.

$credenciais = [0 => ['user' => 'bono@senac.br', 'pass' => '123456'],
                1 => ['user' => 'marcos@senac.br', 'pass' => '654321'],
                2 => ['user' => 'karina@senac.br', 'pass' => '222222']];

if(isset($_SESSION['login'])){ // caso contrario usuario já existe logado no sistema
    include 'header_tpl.php';
    include 'index_menu_tpl.php';
    include 'footer_tpl.php';
    
} elseif (isset(($_POST['entrar']))) { //caso o usuario tenha acabado de preencher o form de login
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    if (in_array(['user' => $login, 'pass' => $senha], $credenciais)){
        $_SESSION['login'] = $login;

        include 'header_tpl.php';
        include 'index_menu_tpl.php';
        include 'footer_tpl.php';
    } else {
        $msg = 'Credenciais Invalidas, tente novamente!!';

        include 'index_tpl.php';
    }

} else { //caso o usuario tenha acabado de chegar no sistema
    //include no formulario
    include 'index_tpl.php';
}