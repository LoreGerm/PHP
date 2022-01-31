<?php

$file = file('colori.txt');

$colori = [];

foreach ($file as $key => $value){
    
    if ($colori[$value] > 0){
        $colori[$value] += 1;
    }
    else{
        $colori[$value] = 1;
    }
}

function stampa_key(){
    global $colori;
    foreach ($colori as $key => $value){
        $a = strtoupper($key);
        echo '<th scope="col">', $a, "</th>";
    }    
}

function stampa_value(){
    global $colori;
    foreach ($colori as $key => $value){
        echo '<td>', $value, '</td>';
    }    
}

?>