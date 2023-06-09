<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
        
        $dado = rand(0, 5);
        $dadoLetras = ["Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis"];
        echo $dadoLetras[$dado];


    ?>
</body>
</html>