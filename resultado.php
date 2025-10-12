<?php
include "rectangulo.php";
include "cuadrado.php";
include "triangulo.php";
include "circulo.php";

session_start();
//Actúo en función de la figura recibida:
switch($_SESSION['figura']){
    case 'triangulo':
        $_SESSION['lado1'] = isset($_POST['num1']) ? $_POST['num1']: 0;
        $_SESSION['lado2'] = isset($_POST['num2']) ? $_POST['num2']: 0;
        $_SESSION['lado3'] = isset($_POST['num3']) ? $_POST['num3']: 0;
        $lado1 = $_SESSION['lado1'];
        $lado2 = $_SESSION['lado2'];
        $lado3 = $_SESSION['lado3'];
        $figura = new Triangulo("triangulo", $lado1, $lado2, $lado3);
        echo "triangulo";
        break;
    case 'rectangulo':
        $_SESSION['lado1'] = isset($_POST['num1']) ? $_POST['num1']: 0;
        $_SESSION['lado2'] = isset($_POST['num2']) ? $_POST['num2']: 0;
        $lado1 = $_SESSION['lado1'];
        $lado2 = $_SESSION['lado2'];
        $figura = new Rectangulo("rectangulo", $lado1, $lado2);
        echo "rectangulo";
        break;
    case 'cuadrado':
        $_SESSION['lado1'] = isset($_POST['num1']) ? $_POST['num1']: 0;
        $lado1 = $_SESSION['lado1'];
        $figura = new Cuadrado("cuadrado", $lado1);
        echo "cuadrado";
        break;
    case 'circulo':
        $_SESSION['lado1'] = isset($_POST['num1']) ? $_POST['num1']: 0;
        $lado1 = $_SESSION['lado1'];
        $figura = new Circulo("circulo", $lado1);
        echo "circulo";
        break;
}


//Creo la figura según los datos recibidos: 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
</body>
</html>