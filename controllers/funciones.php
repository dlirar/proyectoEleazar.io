<?php 

function limpiarCadena($cadena){
    $buscar = array("select","insert"," as "," where "," = "," or ", " from ", " limit ");
    $cadenaLimpia = str_replace($buscar,"",$cadena);
    htmlspecialchars($cadenaLimpia);
    return $cadenaLimpia;
}

function validarDato($dato){
    if(isset($dato))
        return $dato;
}
?>