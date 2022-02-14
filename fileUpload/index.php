<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<?php  require_once "elimina.php";  ?>
<body class="container" style="background-color: #525252;">
    
    <form action="" method="POST" class="form" style="margin-top: 20px;" enctype="multipart/form-data">
        <label style="color:#fff">Nome file</label>
        <input type="text" name="name">
        <input type="file" name="file" style="color:#fff">
        <input type="submit">
    </form>

    <?php
        if (isset($_POST['name'])){
            $uploadDir = 'file/';

            if (0 === $_FILES['file']['error']){
                $exention = '.'.strtolower(strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION)));
                if($exention != ".jpg" && $exention != ".png" && $exention != ".jpeg") {
                    echo "Sorry, only JPG, JPEG, PNG files are allowed.";
                }
                else{
                    if($exention == "."){
                        $_FILES['file']['name'] = $_POST['name'];
                    }
                    else{
                        $_FILES['file']['name'] = $_POST['name'].$exention;
                    }
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir.basename($_FILES['file']['name']))){
                        echo 'upload';
                    }
                    else{
                        echo 'no';
                    }
                }
            }
            else{
                echo 'error';
            }   
        }

?>

    ?>

    <div class="row" style="margin-top:50px">
                <?php
                    $directory = "file";
                    $images = glob($directory . "/*.*");
                    foreach($images as $image){
                        $nome = substr($image,7);
                        $fun = 'elimina.php?nome=$nome';
                        echo '<div class="col-3"><img src="'.$image.'"style="width:20rem"> <a href="'.$fun.'"><button type="button" class="btn btn-danger">Elimina</button></a> </div>';
                    }
                ?>
    </div>
        

</body>
</html>