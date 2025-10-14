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
        $figura = new Triangulo($_SESSION['figura'], $lado1, $lado2, $lado3);
        if($figura->trianguloValido()){
            echo "<h3>Has elegido un ". $figura->tipoFigura . " con lados " . $figura->lado1 . ", " . $figura->lado2 . " y " . $figura->lado3 . "</h3>";
            echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
            echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
        } else {
            //Volver a pedir los lados
            echo "esta mal";
        }
        break;
    case 'rectangulo':
        $_SESSION['lado1'] = isset($_POST['num1']) ? $_POST['num1']: 0;
        $_SESSION['lado2'] = isset($_POST['num2']) ? $_POST['num2']: 0;
        $lado1 = $_SESSION['lado1'];
        $lado2 = $_SESSION['lado2'];
        $figura = new Rectangulo($_SESSION['figura'], $lado1, $lado2);
        echo "<h3>Has elegido un ". $figura->tipoFigura . " con lados " . $figura->lado1 . ", " . $figura->lado2 . "</h3>";
        echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
        echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
        break;
    case 'cuadrado':
        $_SESSION['lado1'] = isset($_POST['num1']) ? $_POST['num1']: 0;
        $lado1 = $_SESSION['lado1'];
        $figura = new Cuadrado($_SESSION['figura'], $lado1);
        echo "<h3>Has elegido un ". $figura->tipoFigura . " con lados " . $figura->lado1 . "</h3>";
        echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
        echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
        break;
    case 'circulo':
        $_SESSION['lado1'] = isset($_POST['num1']) ? $_POST['num1']: 0;
        $lado1 = $_SESSION['lado1'];
        $figura = new Circulo($_SESSION['figura'], $lado1);
        echo "<h3>Has elegido un ". $figura->tipoFigura . " con radio " . $figura->lado1 . "</h3>";
        echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
        echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
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