<?php
session_start();

$_SESSION['figura'] = isset($_POST['figura']) ? $_POST['figura']: "";
echo($_SESSION['figura']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lados</title>
</head>
<body>
    <h1><?php echo $_SESSION['figura']; ?></h1>
    <form method="post" action="resultado.php">
        <p>Introduce los lados</p>
        <label for="num1">Lado 1: </label>
        <input type="number" id="num1" name="num1">
        <label for="num2">Lado 2: </label>
        <input type="number" id="num2" name="num2">
        <input type="submit" name="enviar" value="Enviar datos">
    </form>
</body>
</html>