<?php
session_start();
//Elimino variables de sesión
unset($_SESSION['figura']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geométricas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background-color: #969696ff; /* Fondo gris suave */
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 8x 16 rgba(0,0,0,0.2);
        }
        .card-header h1 {
            font-weight: bold;
            text-align: center;
        }
        .form-select, .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <form method="post" action="lados.php">
                            <h1>Elige una figura</h1>
                    </div>
                    <div class="card-body">
                            <select id="figura" name="figura" class="form-select">
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
                            
                            <button type="submit" name="elegir" value="Elegir" class="btn btn-primary w-100">Elegir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>