<?php
    $directorio = "iniciativas/";
    $archivo    = basename($_FILES["file"]["name"]);
    $ruta       = $directorio.$archivo;
    if(isset($_POST["enviarIniciativa"])){
       if (move_uploaded_file($_FILES["file"]["tmp_name"], $ruta)) {
            echo "El archivo". basename( $_FILES["file"]["name"]). " se ha subido.";
        } else {
            echo "Error al subir";
        }
    }
?>