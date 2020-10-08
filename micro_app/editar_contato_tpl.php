<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
</head>
<body>
    <center>
        <a href="listar_contato.php">Listar</a>
        <a href="listar_contato.php">Editar</a><br><br>
        <h1>Edite seu contato</h1><br>
        <?php
        if(isset($msg)) echo $msg;
        ?>
        <form method="POST" action="editar_contato.php">
            Nome: <input type="text" name="nm" value="<?php echo $contato['nome'] ?>"><br>
            Telefone: <input type="text" name="tel" value="<?php echo $contato['telefone'] ?>"><br>
            <input type="hidden" name="id" value="<?php echo $contato['id'] ?>">
            <input type="submit" value="Gravar">
        </form>
    </center>
</body>
</html>