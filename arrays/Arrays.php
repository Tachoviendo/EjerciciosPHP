<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS</title>
</head>
<body>
    <h1>Arrays</h1>
    <h3>Con foreach</h3>
    <?php
        $alumnos = ["Brian", "Gabriel", "Gian", "Mateo", "Danna", "Bruno", "Leandro", "Marco", "Deborah", "Ricardo", "Enmanuel"];
        foreach($alumnos as $a) echo "<br>". $a;

    ?>

    <h3>Con for</h3>
    <?php
        $alumnos = ["Brian", "Gabriel", "Gian", "Mateo", "Danna", "Bruno", "Leandro", "Marco", "Deborah", "Ricardo", "Enmanuel"];
        for ($i=0; $i<count($alumnos); $i++){
            echo "<br>". $alumnos [$i];
        }

    ?>

    
</body>
</html>