<?php
    //SI VENGO DE LADOS
    if(!isset($_POST['enviar'])){
        header("Location: ../lados.php");
        exit();
    } else {
        session_start();
        $errores = "";
        $figura = $_SESSION['figura'];
        $lado1 = $_POST['num1'];
        //Verifico si existen lados 2 y 3 para que no exploten las figuras con menos lados
        if (isset($_POST['num2'])){$lado2 = $_POST['num2'];};
        if (isset($_POST['num3'])){$lado3 = $_POST['num3'];};

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
        //Solo si es triángulo o rectángulo
        if($figura == 'triangulo' || $figura == 'rectangulo'){
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
        } 
        //LADO3
        //Solo si es triángulo
        if($figura == 'triangulo'){
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
        }

        if ($errores != ""){
        //VOLVER A LADOS Y PASAR VARIABLES RECIBIDAS + ERRORES
        $datosRecibidos = array(
            'lado1' => $lado1,
            'lado2' => $lado2,
            'lado3' => $lado3,
        );

        $datosDevueltos = http_build_query($datosRecibidos);
        header("Location: ../lados.php".$errores."&".$datosDevueltos);
        exit();
        } else {
            // //IR A LA PAGINA DE RESULTADO
            echo "<form id='EnvioResultado' action='../resultado.php' method='POST'>";
            echo "<input type='hidden' id='lado1' name='lado1' value='".$lado1."'>";
            if (isset($lado2)){
            echo "<input type='hidden' id='lado2' name='lado2' value='".$lado2."'>";
            }
            if (isset($lado3)){
            echo "<input type='hidden' id='lado3' name='lado3' value='".$lado3."'>";
            }
            echo "</form>";
           echo "<script>document.getElementById('EnvioResultado').submit();</script>";
            
        }
        
    }
?>