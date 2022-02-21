<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">



    <form method="POST" action="" style="margin-top: 50px;">
    <div class="input-group mb-3">
        <span class="input-group-text">Data</span>
        <input type="date" class="form-control" value="<?=date("Y-m-d");?>" name="data" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">€</span>
        <input type="number" step="0.01" class="form-control" name="importo" aria-label="Amount (to the nearest dollar)" placeholder="Importo" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">L</span>
        <input type="number" step="0.01" class="form-control" name="litri" placeholder="Litri" required>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">Km</span>
        <input type="number" step="0.01" class="form-control" name="km" placeholder="Km attuali" required>
    </div>
    <div style="display: flex;">
        <button type="submit" class="btn btn-primary">Salva</button>
        <?php
            if(isset($_POST['data'])){
                $myfile = fopen("file.csv", "a");
                foreach($i as $_POST){
                    str_replace(',', '.', $i);
                }
                $elementi = strval($_POST['data']).','.strval($_POST['importo']).','.strval($_POST['litri']).','.strval($_POST['km']).PHP_EOL;
                
                fwrite($myfile,$elementi);
                fclose($myfile);
                echo '<h3 style="margin-left:50px">Dati salvati</h3>';
            }   
        ?>
    </div>
    </form>



<table class="table" style="margin-top: 50px;">
  <thead>
    <tr>
        <?php
            $file = file('file.csv');
            $pieces = explode(",", $file[0]);
            foreach($pieces as $i){
                echo '<th scope="col">'.$i.'</th>';
            }
        ?>
    </tr>
  </thead>
  <tbody>
        <?php
            $file = file('file.csv');
            for($i=1; $i<count($file); $i=$i+1){
                echo '<tr>';
                $pieces = explode(",", $file[$i]);
                for($j=0; $j<count($pieces); $j=$j+1){
                    if ($j == 1){
                        echo '<td scope="col"> € '.str_replace('.', ',', $pieces[$j]).'</td>';
                    }
                    elseif($j == 2){
                        echo '<td scope="col"> L. '.str_replace('.', ',', $pieces[$j]).'</td>';
                    }
                    elseif($j == 3){
                        echo '<td scope="col"> Km '.str_replace('.', ',', $pieces[$j]).'</td>';
                    }
                    else{
                        $data = explode("-", $pieces[$j]);
                        echo '<td scope="col">'.$data[2].'/'.$data[1].'/'.$data[0].'</td>';
                    }
                }
                echo '</tr>';
            }
            
        ?>
  </tbody>
</table>
    

</body>
</html>