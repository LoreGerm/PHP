<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="index.php">
        <label>NUMERO</label>
        <input type="number" name="n1">
    </form>
    
    <?php
        $n = $_POST["n1"];
        $array = ['ZERO', 'UNO', 'DUE', 'TRE', 'QUATTRO', 'CINQUE', 'SEI', 'SETTE', 'OTTO', 'NOVE', 'DIECI'];
        $x = count($array)-1;
        $y = 0;

        if ($n > count($array)-1 || $n < $y){
            echo "<h1> Tra $y e $x </h1>";
        }
        else{
            $x = $array[$n];
            echo "<h1> $x </h1>";
        }
        

    ?>

</body>
</html>