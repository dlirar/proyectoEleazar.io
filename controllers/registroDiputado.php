<?php 
require_once('conexion.php');
require_once('funciones.php');

if(isset($_POST['registro'])){
    $conexion        = conexion();
    $nombre          = mysqli_real_escape_string($conexion, limpiarCadena(validarDato($_POST['nombre'])));
    $apellidoPaterno = mysqli_real_escape_string($conexion, limpiarCadena(validarDato($_POST['apellidoPaterno'])));
    $apellidoMaterno = mysqli_real_escape_string($conexion, limpiarCadena(validarDato($_POST['apellidoMaterno'])));
    $correo          = mysqli_real_escape_string($conexion, limpiarCadena(validarDato($_POST['correo'])));
    $pass            = password_hash(limpiarCadena(validarDato($_POST['contrasena'])), PASSWORD_DEFAULT);
    $estado          = 1;
    
    $sql = "insert into diputado(nombre, ap_paterno,ap_materno,correo,pass,estado) values('".$nombre."', '".$apellidoPaterno."', '".$apellidoMaterno."', '".$correo."', '".$pass."', ".$estado.");";
    $query = mysqli_query($conexion,$sql);
    
    if($query){
        echo "Datos insertados";
    } else{
        echo "Error ".mysqli_error($conexion);
        echo "<br/>";
        echo "Error ".mysqli_errno($conexion);
    }

    mysqli_close($conexion);
}
?>