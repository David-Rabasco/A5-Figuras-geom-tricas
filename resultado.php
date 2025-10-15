<?php
include "rectangulo.php";
include "cuadrado.php";
include "triangulo.php";
include "circulo.php";

session_start();
//Compruebo que exista la variable de sesión figura
if(!isset($_SESSION['figura'])){
    header("Location: index.php?error=noFigura");
    exit();
}    
//Actúo en función de la figura recibida:
switch($_SESSION['figura']){
    case 'triangulo':
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];
        $figura = new Triangulo($_SESSION['figura'], $lado1, $lado2, $lado3);
        if($figura->trianguloValido()){
            echo "<h3>Has elegido un ". $figura->tipoFigura . " con lados " . $figura->lado1 . ", " . $figura->lado2 . " y " . $figura->lado3 . "</h3>";
            echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
            echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
        } else {
            //Volver a pedir los lados
            echo $lado1;
            echo $lado2;
            echo $lado3;
            echo "esta mal";
        }
        break;
    case 'rectangulo':
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $figura = new Rectangulo($_SESSION['figura'], $lado1, $lado2);
        echo "<h3>Has elegido un ". $figura->tipoFigura . " con lados " . $figura->lado1 . ", " . $figura->lado2 . "</h3>";
        echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
        echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
        break;
    case 'cuadrado':
        $lado1 = $_POST['lado1'];
        $figura = new Cuadrado($_SESSION['figura'], $lado1);
        echo "<h3>Has elegido un ". $figura->tipoFigura . " con lados " . $figura->lado1 . "</h3>";
        echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
        echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
        break;
    case 'circulo':
        $lado1 = $_POST['lado1'];
        $figura = new Circulo($_SESSION['figura'], $lado1);
        echo "<h3>Has elegido un ". $figura->tipoFigura . " con radio " . $figura->lado1 . "</h3>";
        echo "<p>El área es " . round($figura->calcularArea(),2) . "</p>";
        echo "<p>El perímetro es " . round($figura->calcularPerimetro(),2) . "</p>";
        break;
}
//Elimino variables de sesión
unset($_SESSION['figura']);
?>

