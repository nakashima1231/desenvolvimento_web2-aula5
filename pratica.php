<?php
if (file_exists('diario.md')) {
    $diario = fopen('diario.md', 'r');
    echo nl2br(fread($diario, filesize('diario.md')));
    fclose($diario);
}
?>
