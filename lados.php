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
    
</body>
</html>