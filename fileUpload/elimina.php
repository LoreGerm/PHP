<?php

if (isset($_GET['name'])) {
    function Elimina($nome){
        $directory = "file";
        $images = glob($directory . "/" . $nome );
    }
        
?>