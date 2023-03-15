<?php

include 'conexion.php';


//SEPARADOR


$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$contrato = $_POST["contrato"];
$cedula = $_POST["cedula"];

$insertar = "INSERT INTO usuarios(usuario, clave, nombre, tipo, contrato, cedula) VALUES ('$usuario','$clave','$nombre','$tipo','$contrato','$cedula')";
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
                <?php if ($resultado) { ?>
                    <script>
                        alert("Usuario creado con exito. Regresa a la pantalla principal")
                    </script> <?php header("location: Admin.php");
                            } else { ?>
                    <script>
                        alert("Ocurrio un error creando un usuario, intentalo de nuevo mas tarde.")
                    </script>
                <?php } ?>
                <a href="Tecnico.php" class="btn btn-default2"> Regresar</a>
            </div>

        </div>
    </div>
</body>

</html>