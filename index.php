<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geométricas</title>
</head>
<body>
    <form method="post" action="lados.php">
        <h1>Elige una figura</h1>
        
        <select id="figura" name="figura" style="max-width: 350px;">
            <legend for="figura">Figuras geométricas</legend>
            <option value="triangulo">Triángulo</option>
            <br>
            <option value="rectangulo">Rectángulo</option>
            <br>
            <option value="cuadrado">Cuadrado</option>
            <br>
            <option value="circulo">Círculo</option>
            <br>
        </select>
        
        <input type="submit" name="elegir" value="Elegir">
    </form>
</body>
</html>