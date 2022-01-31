
<?php
    
    $partecipanti = [
        ['nome'=>'Simone','data_nascita'=>'1986-03-18','sesso'=>'M','email'=>'test@notreal.com'],
        ['nome'=>'Gabriele','data_nascita'=>'1991-09-01','sesso'=>'M','email'=>'test2@notreal.com'],
        ['nome'=>'Andrea','data_nascita'=>'1985-02-14','sesso'=>'F','email'=>'test3@notreal.com'],
        ['nome'=>'Giuseppe','data_nascita'=>'1992-08-18','sesso'=>'M','email'=>'giuseppe@test.com']
    ];

    function intestazione(){
        global $partecipanti;
        foreach ($partecipanti[0] as $chiave => $valore) {
            echo "<th id='table'> $chiave </th>";
        }
    }

    function contenuto(){
        global $partecipanti;
        for($i=0;$i<4;$i++){
            echo "<tr> </tr>";
            foreach ($partecipanti[$i] as $chiave => $valore) {
                if ($chiave == "data_nascita"){
                    $data_formatta = substr($valore,8,2)."/".substr($valore,5,2)."/".substr($valore,0,4);
                    echo "<td id='table'> $data_formatta </td>";
                }
                else{
                    if ($chiave == "sesso"){
                        if($valore == "M"){
                            echo "<td id='table'> <i class='bi bi-gender-male' style='color: white'></i> </td>";
                        }
                        else{
                            echo "<td id='table'> <i class='bi bi-gender-female' style='color: white'></i></td>";
                        }
                    }
                    else{
                        if ($chiave == "email"){
                            echo "<td id='table'><a href='mailto:$valore'</a> $valore</td>";
                        }
                        else{
                            echo "<td id='table'> $valore </td>";
                        }
                    }
                }
            }
        }
    }

?>