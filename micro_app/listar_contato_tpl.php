<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <center>
        <a href="./">Novo contato</a>
        <br><br>
        <table border="1" width="50%">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Ação</td>
            </tr>   
            <?php
                if(count($tabela) >  0){
                    foreach($tabela as $id => $registro){
                        echo "<tr>
                                <td>$id</td>
                                <td>{$registro['nome']}</td>
                                <td>{$registro['telefone']}</td>
                                <td><a href='./apagar_contato.php?id=$id'>Apagar</a></td>
                                <td><a href='./editar_contato.php?id=$id'>Editar</a></td>
                              </tr>";
                    }
                }else{
                    echo "<tr>
                            <td colspan='4'>Não há dados</td>
                          </tr>";
                }
            ?> 
        </table>
    </center>
</body>
</html>