<?php

include 'conexion.php';

$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$id_nombre = $_POST["id_nombre"];
$nombre = $_POST["nombre"];
$stock = $_POST["stock"];
$distribuidor = $_POST["distribuidor"];
$fecha = $_POST["fecha"];
$tipo = $_POST["tipo"];
$costo = $_POST["costo"];
$descripcion = $_POST["descripcion"];


$insertar = "INSERT INTO estudiantes(marca, modelo, id_nombre, nombre, stock, distribuidor, fecha, tipo, costo, descripcion) VALUES ('$marca','$modelo','$id_nombre','$nombre','$stock','$distribuidor','$fecha','$tipo','$costo','$descripcion')";
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
                <h3>REGISTRO GUARDADO</h3>
                <?php } else { ?>
                <h3>ERROR AL GUARDAR</h3>
                <?php } ?>  
                <a href="Tecnico.php" class="btn btn-default2"> Regresar</a>  
            </div>
         
         </div>
        </div>   
    </body>
</html>
       
       
    


