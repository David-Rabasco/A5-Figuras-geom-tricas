<?php
session_start();
//Actúo en función de la figura recibida:
switch($_SESSION['figura']){
    case 'triangulo':
        $figura = new Triangulo("triangulo", $lado1, $lado2, $lado3);
        echo "triangulo";
        break;
    case 'rectangulo':
        $figura = new Rectangulo("rectangulo", $lado1, $lado2);
        echo "rectangulo";
        break;
    case 'cuadrado':
        $figura = new Cuadrado("cuadrado", $lado1);
        echo "cuadrado";
        break;
    case 'circulo':
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