<?php

include 'conexion.php';

session_start();





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
            <div class="doble">
                <div class="contenedor-doble">
                    <h3>Taller</h3>
                    <a class="btn-admin" href="Tabla.php">Lista de Productos</a>
                    <a class="btn-admin" href="new-product.php">Añadir Producto</a>

                </div>
                <div class="contenedor-doble">
                    <h3>Venta</h3>
                    <a class="btn-admin" href="selling.php">Lista de Productos</a>
                    <a class="btn-admin" href=" new-selling.php">Nuevo Producto</a>
                </div>
            </div>


        </div>
    </div>

</body>

</html>