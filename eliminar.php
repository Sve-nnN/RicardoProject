<?php

include 'conexion.php';
$id = $_GET['id'];


$insertar = "DELETE FROM estudiantes WHERE id = '$id'";

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
                <h3>REGISTRO ELIMINADO</h3>
                <?php } else { ?>
                <h3>ERROR AL ELIMINAR</h3>
                <?php } ?>  
                <br>
                <a href="Admin.php" class="btn btn-default2"> Regresar</a>  
            </div>
         
         </div>
        </div>   
    </body>
</html>
       
       