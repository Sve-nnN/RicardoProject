<?php
session_start();

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['tipo'] == "2") {
        header("location: admin.php");
    } else if ($_SESSION['user']['tipo'] == "1") {
        header("location: Tecnico.php");
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario de Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/main.js"></script>

</head>

<body>

    <div class="error">
        <span>Datos de Ingreso no Validos, intentalo de nuevo por favor</span>
    </div>

    <div class="login-box">

        <form action="login.php" method="post" id="validarFrm">
            <h2>Gestor de Inventario</h2>
            <img src="jpg/user.png" class="user">
            <p>Usuario</p>
            <input type="text" placeholder="&#128187; Usuario" pattern="[A-Za-z0-9_-]{4,15}" autocomplete="off" name="usuario" class=caja>
            <p>Contraseña</p>
            <input type="password" placeholder="&#128273; Contraseña" pattern="[A-Za-z0-9_-]{4,15}" required name="clave" class=caja>
            <input type="submit" value="Ingresar" class="boton">
            <br>
            <p style="font-size:12px">¿Olvidaste la contraseña? <a href="recupera.php" class="text">Recuperar
                    contraseña.</a></p>
        </form>
    </div>
    <!--a href="info.php">prueba</a>
     <a href="tecnicoclave.php">tecnicoclave</a>
    <a href="adminclave.php">adminclave</a-->

</body>

</html>