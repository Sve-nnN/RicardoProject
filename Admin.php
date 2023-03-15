<?php

include 'conexion.php';

session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['tipo'] != "2") {
        header("location: Tecnico.php");
    }
} else if ($_SESSION['user']['usuario'] != "admin") {
    header("location: Admin.php");
}





$where = "";

if (!empty($_POST)) {

    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE id_nombre='$valor'";
    }
}


$sql = "SELECT * FROM estudiantes $where";
$resultado = $mysqli->query($sql);


?>



<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">



    <title>Administrador</title>
</head>

<body class="flexcenter">

    <div class="wrapper grid center">
        <div class="container-md">
            <H2>¿Que te gustaría hacer?</H2>
            <a class="btn-admin" href="Tecnico.php">Ingreso de Productos</a>
            <a class="btn-admin" href=" management.php">Administrar Productos</a>
            <a class="btn-admin" href="new-user.php">Crear Usuario</a>
        </div>
    </div>

</body>

</html>