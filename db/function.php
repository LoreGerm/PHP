<?php

/**
 * Funzione che esegue una query nel database PostgreSql
 * e restituisce un array bidimensionale dei risultati
 */
function DBSelect($select) {

    $result = array();
    $host= 'localhost';
    $db = 'prova2';
    $user = 'postgres';
    $password = 'root'; 

    try {
        $pdo = new PDO('pgsql:host='.$host.';port=5432;dbname='.$db,$user,$password);
        if (!$pdo) {
            die("Connessione Errata!");
        }

        $stmt = $pdo->query($select);
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[] = $row; 
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    } finally {
        if ($pdo) {
            $pdo = null;
        }
    }

    return $result;
}

?>