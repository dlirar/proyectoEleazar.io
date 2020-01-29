<?php
$host    = "localhost";
$usuario = "root";
$pass    = "";
$db      = "grupo";



function conexion(){
    global $host, $usuario, $pass, $db;
    $conn = mysqli_connect($host, $usuario, $pass, $db);
    if(mysqli_connect_errno())
        echo"Error al conectar con la base de datos".mysqli_connect_error();
    else
        return $conn;
}

?>