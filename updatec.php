<?php

include 'conexion.php';
$id = $_POST['id'];
$Cedula = $_POST["Cedula"];
$Historia = $_POST["Historia"];
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Telefono = $_POST["Telefono"];
$lnf = $_POST["lnf"];
$direccion = $_POST["direccion"];


$insertar = "UPDATE estudiantes SET Cedula='$Cedula', Historia='$Historia', Nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono', lnf='$lnf', direccion='$direccion' WHERE id = '$id'";

$resultado = $mysqli->query($insertar);



?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
    </head>
    <body>
        <div class="container">
           <div class="row">
            <div class="row" style="text-align:center">
                <?php if($resultado){ ?>
                <h3>REGISTRO MODIFICADO</h3>
                <?php } else { ?>
                <h3>ERROR AL MODIFICAR</h3>
                <?php } ?>   
                <br> 
            <a href="Tecnico.php" class="btn btn-default2"> Regresar</a>
            </div>
         
         </div>
        </div>   
    </body>
</html>
       
       