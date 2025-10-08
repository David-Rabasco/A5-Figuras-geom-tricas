<?php
    include 'FiguraGeometrica.php';
    include 'Triangulo.php';

    $triangulo = new Triangulo(4, 5, 46);

    echo "Area".$triangulo->calcularArea()."<br>";
    echo "Perimetro".$triangulo->calcularPerimetro()."<br>";
?>