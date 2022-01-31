<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="container">
        <form method="POST" action="index.php">
            <input placeholder="Primo numero" type="number" name="n1" class="input" required>
            <br><br>
            <input placeholder="Secondo numero" type="number" name="n2" class="input" required>
            <br><br>
            <button class="btn_op" name="op" value="+"> + </button>
            <button class="btn_op" name="op" value="-"> - </button>
            <button class="btn_op" name="op" value="*"> X </button>
            <button class="btn_op" name="op" value="/"> / </button>
        </form>
    </div>


    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $btn = $_POST["op"];
        
        $op = 0;
        if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["op"])){
            if($btn == "+"){
                $op = $n1+$n2;
            }
            else{
                if($btn == "-"){
                    $op = $n1 - $n2;
                }
                else{
                    if($btn == "/"){
                        $op = $n1/$n2;
                    }
                    else{
                        if($btn == "*"){
                            $op = $n1 * $n2;
                        }
                    }
                }
            }

            echo "<p class='result'> $n1 $btn $n2 = $op </p>";
        }
    ?>

</body>
</html>


