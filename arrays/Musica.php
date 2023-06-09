<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Música favorita:
    </h1>
    
    <?php
        $album = [$c1 = ["Como le digo", "Trap"], $c2 = ["TCH","Trap"], $c3 = ["Fvk the police", "Classic Rap"],$c4=["Baby", "pop"], $c5=["My universe", "k-pop"],$c6=["Cielo de un solo color", "Rock rioplatense"], $c7=["Laura", "Cumbia villera"],$c8=["Nueva York", "Cumbia cheta"]];

        foreach($album as $i => $a){
            echo"<br>".($i+1).". ".$a[0];
        }

    
    ?>
    <br>
    <form action="Musica.php" method="POST">
        <input type="text" name="musica">
        <input type="submit" value="Mandaleee">
    </form>

    <?php
        $cancion = $_POST['musica'];
        
        foreach ($album as $i => $a){
            $aux = $cancion;
            if (strtolower($cancion) == strtolower($a[0]))}
                echo "La canción ".$aux." es del tipo:".$a[1];
            }
        }
        
    ?>
    

    <script>
        MAL CODIGO
        //Funcion que suma dos numeros
        function SumNum(x, y){
            return x+y
        }

        BUEN CODIGO
        LAS VARIABLES Y NOMBRES DEBEN ESTAR COMPLETAS Y SER LEGIBLES Y ENTENDIBLES, CODIGO DEBE ESTAR FORMALIZADO Y ESPACIADO A CONVENCIENCIA, MAS CORTO NO SIGNIFICA MEJOR. SIEMPRE BUSCAR LA ESCALABILIDAD Y EFECTIVIDAD
        //Funcion que recibie como parametros dos numeros de tipo INT y devuelve la suma de los dos, necesitada debido a la repeticion y efectividad del codigo
        function SumarDosNumeros (numeroUNO, numeroDOS){
            return (numeroUNO + numeroDOS)
        }

    </script>
</body>
</html>