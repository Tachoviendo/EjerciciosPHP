<?php
include('connection.php');
$con = connection();
$sql = "SHOW DATABASES";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos</title>
</head>
<body>
    <div>
        <h1>CREAR BASES DE DATOS</h1>
        <form action="crearBase.php" method="POST">
            <input type="text" id="nombrebd" name="nombrebd" placeholder="Nombre de la bd"> <!-- Añade el atributo "name" aquí -->
            <input type="submit" value="Crear base de datos">
        </form>
    </div>
    <div class="tablas">
        
    <h2>Bases de datos que existen</h2>
        <table>
            <thead>
                <tr>
                    <th>Bases existentes<th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($query) ): ?>
                <tr>
                
                    <td><?=$row['Database'] ?></td>
                    <td><a href="eliminarBase.php?nombreBD=<?=$row['Database'] ?>">Eliminar</a></td>
                
            </tbody>
            <?php endwhile; ?>
        </table>
        
    </div>
    
</body>
</html>
