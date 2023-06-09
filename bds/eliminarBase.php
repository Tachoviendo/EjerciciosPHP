<?php
include('connection.php');
$con = connection();

if (isset($_GET['nombreBD'])) {
    $nombreBD = $_GET['nombreBD'];

    $sql = "DROP DATABASE $nombreBD";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "La base de datos '$nombreBD' se ha eliminado correctamente.";
    } else {
        echo "Error al eliminar la base de datos: " . mysqli_error($con);
    }
}
?>
