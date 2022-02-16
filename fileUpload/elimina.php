<?php

$nome = $_GET['file'];
$nome = glob('file' . "/" . $nome);
unlink($nome);
header('Location: index.php')
?>