<?php
include "./figuras/Rectangulo.php";
include "./figuras/Cuadrado.php";
include "./figuras/Triangulo.php";
include "./figuras/Circulo.php";

session_start();
//Compruebo que exista la variable de sesión figura
if(!isset($_SESSION['figura'])){
    header("Location: index.php?error=noFigura");
    exit();
}   
include_once "./includes/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Resultado</title>
     <style>
        body {
            background-color: #969696ff;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
        }
        .card-header h3 {
            text-align: center;
            font-weight: bold;
        }
        .btn {
            margin-top: 15px;
            width: 100%;
        }
        p {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 col-md-6">
            <div class="card-header">
                <h3>Resultados del <?php echo $_SESSION['figura']; ?></h3>
            </div>
            <div class="card-body">
    <?php
    //Actúo en función de la figura recibida:
    switch($_SESSION['figura']){
        case 'triangulo':
            $lado1 = $_POST['lado1'];
            $lado2 = $_POST['lado2'];
            $lado3 = $_POST['lado3'];
            $figura = new Triangulo($_SESSION['figura'], $lado1, $lado2, $lado3);
            if($figura->trianguloValido()){
                echo "<pre>$figura</pre>";
            } else {
                //Triangulo inválido vuelve a pedir los lados
                header("Location: lados.php?trianguloNoValido=true&lado1=$lado1&lado2=$lado2&lado3=$lado3");
                exit();
            }
            break;
        case 'rectangulo':
            $lado1 = $_POST['lado1'];
            $lado2 = $_POST['lado2'];
            $figura = new Rectangulo($_SESSION['figura'], $lado1, $lado2);
            echo "<pre>$figura</pre>";
            break;
        case 'cuadrado':
            $lado1 = $_POST['lado1'];
            $figura = new Cuadrado($_SESSION['figura'], $lado1);
            echo "<pre>$figura</pre>";
            break;
        case 'circulo':
            $lado1 = $_POST['lado1'];
            $figura = new Circulo($_SESSION['figura'], $lado1);
            echo "<pre>$figura</pre>";
            break;
    }
    //Elimino variables de sesión
    unset($_SESSION['figura']);
    ?>
    <a href="index.php" class="btn btn-primary mt-3">Calcular otra figura</a>
            </div>
        </div>
    </div>
</body>
</html>

