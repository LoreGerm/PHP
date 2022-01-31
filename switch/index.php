<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .success{
        width: 15%;
        padding: 10px;
        background-color: rgb(0,255,0);
        margin-top: 20px;
        border-radius: 20px;
        font-weight: bold;
    }
    .error{
        width: 15%;
        padding: 10px;
        background-color: rgb(255,0,0);
        margin-top: 20px;
        border-radius: 20px;
    }
</style>
<body>
    <form method="POST" action="index.php">
        <label>Numero</label>
        <input type="number" name="n1">
    </form>

    <?php
        $n1 = $_POST["n1"];
        $success = "success";
        $num = '';

        if(isset($n1)){
            switch($n1){
                case 0: $num = 'ZERO';
                break;
                case 1: $num = "UNO";
                break;
                case 2: $num = "DUE";
                break;
                case 3: $num = 'TRE';
                break;
                case 4: $num = 'QUATTRO';
                break;
                case 5: $num = 'CINQUE';
                break;
                case 6: $num = 'SEI';
                break;
                case 7: $num = 'SETTE';
                break;
                case 8: $num = 'OTTO';
                break;
                case 9: $num = 'NOVE';
                break;
                case 10: $num = 'DIECI';
                break;
                default: $num = 'compreso tra 0 e 10'; $success = "error";
            }

            echo "<div class='$success'> $num </div>";
        }
    ?>

</body>
</html>
