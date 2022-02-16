<?php

if (isset($_GET['file'])){
    $nome = $_GET['file'];
    unlink('file/'.$nome);
    header('Location:index.php');
}

?>