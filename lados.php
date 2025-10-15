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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-color: #969696ff; /* fondo gris oscuro */
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
        .card-header h3 {
            font-weight: bold;
            text-align: center;
            color: white;
        }
        .form-select, .form-control, .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 col-md-6">
            <div class="card-header bg-primary">
                <h3>Introduce los lados</h3>
            </div>
    <form method="post" action="includes/validacion.php">
        <?php
            switch($_SESSION['figura']){
                case 'triangulo':
                    ?>
                    <label for="num1">Lado 1: </label>
                    <input type="text" id="num1" name="num1" class="form-control" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
                    
                    <label for="num2">Lado 2: </label>
                    <input type="text" id="num2" name="num2" class="form-control" value="<?php if (isset($_GET['lado2'])){echo $_GET['lado2'];} ?>">
                    <label for="num3">Lado 3: </label>
                    <input type="text" id="num3" name="num3" class="form-control" value="<?php if (isset($_GET['lado3'])){echo $_GET['lado3'];} ?>">
                    <?php
                    break;
                case 'rectangulo':
                    ?>
                    <label for="num1">Lado 1: </label>
                    <input type="text" id="num1" name="num1" class="form-control" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
                    <label for="num2">Lado 2: </label>
                    <input type="text" id="num2" name="num2" class="form-control" value="<?php if (isset($_GET['lado2'])){echo $_GET['lado2'];} ?>">
                    <?php
                    break;
                case 'cuadrado':
                    ?>
                    <label for="num1">Lado 1: </label>
                    <input type="text" id="num1" name="num1" class="form-control" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
                    <?php
                    break;
                case 'circulo':
                    ?>
                    <label for="num1">Radio: </label>
                    <input type="text" id="num1" name="num1" class="form-control" value="<?php if (isset($_GET['lado1'])){echo $_GET['lado1'];} ?>">
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
            </div>
        </div>
    </div>
</body>
</html>