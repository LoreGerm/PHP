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
        <label>Numero</label>
        <input type="number" name="n1">
    </form>

    <?php
        $n1 = $_POST["n1"];

        if(isset($n1)){
            if($n1 >= 37){
                echo '<div style="width:200px; height:200px; background-color:red; margin-top:100px;" ></div>';
            }
            else{
                echo '<div style="width:200px; height:200px; background-color:green; margin-top:100px;" ></div>';
            }
        }
    ?>

</body>
</html>
