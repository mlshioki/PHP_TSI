<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
</head>
<body>
    <center>
        <br><br>
        <a href="./contato.html">Novo Contato</a>
        <br><br>
        <table border="1" width="50%">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Ação</td>
            </tr>
            <?php
                if (count($tabela) > 0){
                    foreach ($tabela as $id => $reg){
                        echo "<tr>
                                    <td>$id</td>
                                    <td>{$reg['nome']}</td>
                                    <td>{$reg['telefone']}</td>
                                    <td>
                                        <a href='apagar_contato.php?id=$id'>Apagar</a>
                                        <a href='editar_contato.php?id=$id'>Editar</a>
                                    </td>
                                </tr>";
                    }
                    else {
                            echo "  <tr>
                                        <td colpsan='4'>
                                            Não encontrei nada com \"{$_POST['argumento']}\"        
                                        </td>
                                    </tr>";
                    }
                ?>
        </table>
    </center>
</body>
</html>