<?php
session_start();

//Creo variable de sesión figura si la recibo por post
if(isset($_POST['figura'])){
    $_SESSION['figura'] = isset($_POST['figura']) ? $_POST['figura']: "";
}

//Compruebo que exista la variable de sesión figura
if(!isset($_SESSION['figura'])){
    header("Location: index.php?error=noFigura");
    exit();
} 

include_once "includes/header.php";
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
    <form method="post" action="includes/validacion.php">
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
    <?php
    //Errores
    
    //Campos vacíos
    if(isset($_GET['lado1Vacio'])){
        echo "<p style='color:red;'>El lado 1 no puede estar vacío</p>";
    }
    if(isset($_GET['lado2Vacio'])){
        echo "<p style='color:red;'>El lado 2 no puede estar vacío</p>";
    }
    if(isset($_GET['lado3Vacio'])){
        echo "<p style='color:red;'>El lado 3 no puede estar vacío</p>";
    }
    //No numéricos
    if(isset($_GET['lado1NaN'])){
        echo "<p style='color:red;'>El lado 1 debe ser un número</p>";
    }
    if(isset($_GET['lado2NaN'])){
        echo "<p style='color:red;'>El lado 2 debe ser un número</p>";
    }
    if(isset($_GET['lado3NaN'])){
        echo "<p style='color:red;'>El lado 3 debe ser un número</p>";
    }
    //Negativos o cero
    if(isset($_GET['lado1Negativo'])){
        echo "<p style='color:red;'>El lado 1 debe ser un número positivo</p>";
    }
    if(isset($_GET['lado2Negativo'])){
        echo "<p style='color:red;'>El lado 2 debe ser un número positivo</p>";
    }
    if(isset($_GET['lado3Negativo'])){
        echo "<p style='color:red;'>El lado 3 debe ser un número positivo</p>";
    }
    //Triángulo no válido
    if(isset($_GET['trianguloNoValido'])){
        echo "<p style='color:red;'>Los lados introducidos no forman un triángulo válido</p>";
    }
    
    ?>
</body>
</html>