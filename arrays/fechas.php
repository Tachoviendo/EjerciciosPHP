<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fechas</title>
</head>
<body>

<form action="fechas.php" method="POST">
    <input type="date" name="dates">

</form>

<?php
    
$var = $_POST['date'];
$aux = str_split($var,1);

echo(array_search($aux, '-'));
  



    // $cosas = ["Hello world","Programación","dev","Arrays","While"];
        
        
    
    //     $aux1 = str_split($cosas[0],3);
    //     $aux2 = str_split($cosas[1],4);
    //     $aux3 = str_split($cosas[2],2);
    //     $aux4 = str_split($cosas[3],2);
    //     $aux5 = str_split($cosas[4],1);    

    // $anashe = [$aux1, $aux2, $aux3, $aux4, $aux5];

        
    
    // for ($i=0; $i<5; $i++){
        
    //     foreach($anashe[$i] as $ia => $coscu){
    //         echo($coscu.'/');
    //     }
    //     echo('<br>');
        
        
    // }


?>
    
    
    
</body>
</html>