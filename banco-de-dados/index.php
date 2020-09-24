<?php

// mysqli_connect('host', 'user', 'password', 'db name');
//Conecta no SGBD
$db = mysqli_connect('localhost', 'root', '', 'lsphp');  

//Cria tabela
$query = mysqli_query(  $db, //faz consulta no banco - cria tabela se ela não existir
                            'CREATE TABLE IF NOT EXISTS contatos
                                (   id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                    nome VARCHAR(255) NOT NULL,
                                    telefone BIGINT)');

if ($query) {
    echo 'Tabela contatos criada com sucesso! <br>';
}else{
    echo 'Não foi possível criar a tabela contatos';
}

$contato = ['nome' => 'Sayuri Hioki', 'telefone' => '11964555208'];

//Inserir dados no banco
if (mysqli_query($db, "INSERT INTO contatos (nome, telefone) 
                        VALUES ('{$contato['nome']}', '{$contato['tel']}')")) {
    echo "Contato inserido com sucesso";
}

//Listar dados da tabela
$query = mysqli_query ($db, 'SELECT * FROM contatos');

while ($registro = $query->fetch_assoc()) {

    echo "<tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nome']}</td>
            <td>{$registro['telefone']}</td>
         </tr>";
}
echo '</table>'; 

//Apagar dados da tabela
if ( mysqli_query( $db, 'DELETE FROM contatos WHERE id = 1') ) {
    echo "Registro apagado com sucesso";
} else {
    echo "Não foi possível apagar o registro";
}

//$_POST $_GET $_REQUEST - Vetores super globais para recebermos dados do usuário
echo "<br><br>Nome enviado: {$_POST['nome']}, telefone: {$_POST['tel']}";