<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['tipo'] == "1") {
        header("location: Admin.php");
    }
} else {
    header("location: Tecnico.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Productos</title>
    <link href="css/aspecto.css" rel="stylesheet">





</head>

<body>

    <form action="new-user-logic.php" method="post">

        <h2 class="form__titulo"></h2>

        <div class="contenedor-input">

            <img src="jpg/Diente.png" class="user">

            <h2 style="text-align:center" class="test">Nuevo Usuario</h2>

            <input type="text" id="usuario" name="usuario" placeholder="Nombre de Usuario" class="Caja-1" title="Nombre de Usuario" tabindex="1" required>

            <input type="password" id="clave" name="clave" placeholder="Clave" class="Caja-1" title="Introducir Clave" tabindex="2" required>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" class=" Caja-1" title="Introducir Nombre y apellido" tabindex="2" required>

            <!--input type="text" id="Nacionalidad" name="Nacionalidad" placeholder="Nacionalidad" class="Caja-1" title="Introducir Nacionalidad" required-->

            <input type="text" id="tipo" value="1" name="tipo" placeholder="tipo" class="Caja-1" title="Introducir tipo" tabindex="4" required>



            <input type="text" id="contrato" name="contrato" placeholder="Contrato" class="Caja-1" title="Introducir Numero de Contrato" tabindex="5" required>

            <input type="number" id="cedula" name="cedula" placeholder="Cedula" class="Caja-1" title="Numero de cedula" tabindex="6" required>

            <!--input type="text" id="expresion" name="expresion" placeholder="Expresion" class="Caja-1" title="Introducir Expresion" required-->

            <!--textarea name="escolarida" id="escolarida" rows="5" Cols="5" class="caja-2" placeholder="Escolarida" title="Escolarida" required></textarea-->

            <input type="submit" value="Guardar Datos" class="btn-enviar" />


        </div>

    </form>

    <div class="pos5">
        <a href="salir.php" class="button salir">Salir</a>
        <a href="descargas/ayuda.pdf" class="button des">Ayuda</a>
        <a href="Tabla.php" class="button regi">Listado de Productos</a>
    </div>



</body>

</html>