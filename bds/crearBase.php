<?php
include('connection.php');
$con = connection();

$nombreBD = $_POST['nombrebd'];

$sql = "CREATE DATABASE $nombreBD";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php");
} else {
    echo "Error al crear la base de datos: " . mysqli_error($con);
}
?>
