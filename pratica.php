<?php
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];

    $diario = fopen('diario.md', 'a');
    fwrite($diario, $texto . "\n\n");
    fclose($diario);

    echo "Salvo com sucesso!<br><br>";
    echo "<a href='visualizar.php'>Ver entradas</a> | <a href='index.html'>Voltar</a>";
}
?>
