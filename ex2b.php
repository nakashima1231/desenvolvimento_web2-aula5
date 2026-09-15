<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas enviadas</title>
</head>
<body>

<?php 

    $arquivoNome = 'notas.txt';

    $arquivo = fopen($arquivoNome, 'a');

    fwrite($arquivo, $_GET['nome'] . ", " . $_GET['n1'] . ", " . $_GET['n2'] . ", " . $_GET['n3'] . "\n");

    fclose($arquivo);

    echo "Aluno " . $_GET['nome'] . " cadastrado!";
?>

</body>
</html>