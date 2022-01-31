<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container">

  

    <table class="table table-bordered table-dark table-striped" style="margin-top: 50px;">
        <?php
            for($j=1; $j<11; $j++){
                echo "<tr> </tr>";
                for($i=1; $i<11; $i++){
                    $m = $j*$i;
                    echo "<td id='table'> $m </td>";
                }
            }
        ?>
    </table>

    <script src="script.js"></script>
</body>
</html>