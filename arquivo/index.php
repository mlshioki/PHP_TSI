<?php

$fp = fopen('planilha.csv', 'w');

fwrite($fp, "Nome;Telefone\r\n");
fwrite($fp, "Sayuri;1112345678\r\n");

fclose($fp);

echo "<pre>Arquivo Gerado\n\n"; 

$fp = fopen('planilha.csv', 'a');

fwrite($fp, "Mark;11989101112\r\n");
fwrite($fp, "Louis;11777777777\r\n");
fwrite($fp, "Krystal;11444444444\r\n");

fclose($fp);

echo "Arquivo Alterado\n\n"; 

echo "Veja o conteúdo do arquivo\n\n";

$fp = fopen('planilha.csv', 'r');

while($linha = fgets($fp)){
    echo $linha;
}

fclose($fp);
