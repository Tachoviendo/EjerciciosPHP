<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "mybd";

    $connect = mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);
    return $connect;

}

?>