<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php

    if(isset($_POST["chiave"])){
        $link = 'https://api.itbook.store/1.0/search/'.$_POST['chiave'];
        $file = json_decode(file_get_contents($link));
        
    
        $card = '<div class="card">';
        foreach($file -> books as $value){
            $card .= "<div>";
            $card .= "<img src='$value->image' class='card-img-top'>";
            $card .= "<div class='card-body'>";
            $card .= "<h5 class='card-title'>'$value->subtitle'</h5>";
            $card .= "<p class='card-text'>Price:  '$value->price'</p>";
            $card .= "<a href='$value->url' class='btn btn-primary'>Link</a>";
            $card .= "</div> </div>";
        }
        $card .= "</div>";
        
    }
        
        
?>

<body class="container">
    
    <form action="" method="POST" class="form">
        <label for="">Parola chiave</label>
        <input type="text" name="chiave">
        <input type="submit">
    </form>


    <div class="container col-3">
        <?= $card ?>
    </div>

    

</body>
</html>