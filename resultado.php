<?php
include "./figuras/Rectangulo.php";
include "./figuras/Cuadrado.php";
include "./figuras/Triangulo.php";
include "./figuras/Circulo.php";

session_start();
//Compruebo que exista la variable de sesión figura
if(!isset($_SESSION['figura'])){
    header("Location: index.php?error=noFigura");
    exit();
}   
include_once "./includes/header.php";

//Actúo en función de la figura recibida:
switch($_SESSION['figura']){
    case 'triangulo':
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];
        $figura = new Triangulo($_SESSION['figura'], $lado1, $lado2, $lado3);
        if($figura->trianguloValido()){
            echo $figura;
        } else {
            //Triangulo inválido vuelve a pedir los lados
            header("Location: lados.php?trianguloNoValido=true&lado1=$lado1&lado2=$lado2&lado3=$lado3");
            exit();
        }
        break;
    case 'rectangulo':
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $figura = new Rectangulo($_SESSION['figura'], $lado1, $lado2);
        echo $figura;
        break;
    case 'cuadrado':
        $lado1 = $_POST['lado1'];
        $figura = new Cuadrado($_SESSION['figura'], $lado1);
        echo $figura;
        break;
    case 'circulo':
        $lado1 = $_POST['lado1'];
        $figura = new Circulo($_SESSION['figura'], $lado1);
        echo $figura;
        break;
}
//Elimino variables de sesión
unset($_SESSION['figura']);
?>

