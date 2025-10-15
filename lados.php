<?php
session_start();

//Si no tengo la variable de sesión de figura la creo
if(isset($_POST['figura'])){
    $_SESSION['figura'] = isset($_POST['figura']) ? $_POST['figura']: "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lados</title>
</head>
<body>
    <!-- PENDIENTE VALIDACION -->
    <h1><?php echo $_SESSION['figura']; ?></h1>
    <form method="post" action="validacion.php">
        <p>Introduce los lados</p>
        <?php
            switch($_SESSION['figura']){
                case 'triangulo':
                    ?>
                    <label for="num1">Lado 1: </label>
                    <input type="text" id="num1" name="num1" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
                    <label for="num2">Lado 2: </label>
                    <input type="text" id="num2" name="num2" value="<?php if (isset($_GET['lado2'])){echo $_GET['lado2'];} ?>">
                    <label for="num3">Lado 3: </label>
                    <input type="text" id="num3" name="num3" value="<?php if (isset($_GET['lado3'])){echo $_GET['lado3'];} ?>">
                    <?php
                    break;
                case 'rectangulo':
                    ?>
                    <label for="num1">Lado 1: </label>
                    <input type="text" id="num1" name="num1" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
                    <label for="num2">Lado 2: </label>
                    <input type="text" id="num2" name="num2" value="<?php if (isset($_GET['lado2'])){echo $_GET['lado2'];} ?>">
                    <?php
                    break;
                case 'cuadrado':
                    ?>
                    <label for="num1">Lado 1: </label>
                    <input type="text" id="num1" name="num1" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
                    <?php
                    break;
                case 'circulo':
                    ?>
                    <label for="num1">Radio: </label>
                    <input type="text" id="num1" name="num1" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
                    <?php
                    break;
                case '':
                    header("Location: index.php");
                    break;
            }
        ?>
        <input type="submit" name="enviar" value="Enviar datos">
    </form>
</body>
</html>