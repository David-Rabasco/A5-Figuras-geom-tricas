<?php
    //SI VENGO DE LADOS
    if(!isset($_POST['enviar'])){
        header("Location: lados.php");
        exit();
    } else {
        session_start();
        $errores = "";
        $figura = $_SESSION['figura'];
        $lado1 = $_POST['num1'];
        $lado2 = $_POST['num2'];
        $lado3 = $_POST['num3'];

        //LADO1
        require_once('./funciones.php');
        if(ValidaCampoVacio($_POST['num1'])){
            if(!$errores){
                $errores .= "?lado1Vacio=true";
            } else {
                $errores .= "&lado1Vacio=true";
            }
        } else {
            // Validar que es numérico
            if(!is_numeric($_POST['num1'])){
                if(!$errores){
                    $errores .= "?lado1NaN=true";
                } else {
                    $errores .= "&lado1NaN=true";
                }
            } else {
                //Validar que es positivo
                if($_POST['num1'] <= 0){
                    if(!$errores){
                        $errores .= "?lado1Negativo=true";
                    } else {
                        $errores .= "&lado1Negativo=true";
                    }
                }
                
            }
        } 
        //LADO2
        if(ValidaCampoVacio($_POST['num2'])){
            if(!$errores){
                $errores .= "?lado2Vacio=true";
            } else {
                $errores .= "&lado2Vacio=true";
            }
        } else {
            // Validar que es numérico
            if(!is_numeric($_POST['num2'])){
                if(!$errores){
                    $errores .= "?lado2NaN=true";
                } else {
                    $errores .= "&lado2NaN=true";
                }
            } else {
                //Validar que es positivo
                if($_POST['num2'] <= 0){
                    if(!$errores){
                        $errores .= "?lado2Negativo=true";
                    } else {
                        $errores .= "&lado2Negativo=true";
                    }
                }
                
            }
        } 
        //LADO3
        if(ValidaCampoVacio($_POST['num3'])){
            if(!$errores){
                $errores .= "?lado3Vacio=true";
            } else {
                $errores .= "&lado3Vacio=true";
            }
        } else {
            // Validar que es numérico
            if(!is_numeric($_POST['num3'])){
                if(!$errores){
                    $errores .= "?lado3NaN=true";
                } else {
                    $errores .= "&lado3NaN=true";
                }
            } else {
                //Validar que es positivo
                if($_POST['num3'] <= 0){
                    if(!$errores){
                        $errores .= "?lado3Negativo=true";
                    } else {
                        $errores .= "&lado3Negativo=true";
                    }
                }
                
            }
        } 

        if ($errores != ""){
        //VOLVER A LADOS Y PASAR VARIABLES RECIBIDAS + ERRORES
        $datosRecibidos = array(
            'lado1' => $lado1,
            'lado2' => $lado2,
            'lado3' => $lado3,
        );

        $datosDevueltos = http_build_query($datosRecibidos);
        header("Location: ./lados.php".$errores."&".$datosDevueltos);
        exit();
        } else {
            // //IR A LA PAGINA DE CHECK
            // echo "<form id='EnvioCheck' action='check.php' method='POST'>";
            // echo "<input type='hidden' id='username' name='username' value='".$username."'>";
            // echo "<input type='hidden' id='email' name='email' value='".$email."'>";
            // echo "<input type='hidden' id='tienda' name='tienda' value='".$tienda."'>";
            // $juego = "";
            // foreach($juegos as $juego){
            //     echo "<input type='hidden' name='juegos[]' value='".$juego."'>";
            // }
            // echo "<input type='hidden' id='pago' name='pago' value='".$pago."'>";
            // echo "<input type='hidden' id='observaciones' name='observaciones' value='".$observaciones."'>";
            // echo "</form>";
            // echo "<script>document.getElementById('EnvioCheck').submit();</script>";
            
        }
        
    }
?>