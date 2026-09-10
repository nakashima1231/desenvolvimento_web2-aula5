<?php 
    $texto = $_GET['texto'];

    echo $texto;

    $diario = fopen('diario.md', 'w');
    fwrite($diario, $texto);
    fclose($diario);

    fopen('diario.md', 'r');
?>