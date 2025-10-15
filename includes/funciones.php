<?php
$error = "";
function ValidaCampoVacio($campo){

    //Comprobamos si el camo está vacío
    if (empty($campo)){
        //Variable vacía
        $error = true;
    } else {
        //Variable rellena
        $error = false;
    };

    return $error;
}
?>