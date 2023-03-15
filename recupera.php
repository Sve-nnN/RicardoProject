<?php
   session_start();

   //$_SESSION['id'];
    
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['usuario'] == "admin"){
            header("location: adminclave.php");
            
        }else{
            header("location: tecnicoclave.php");
        }
    } 
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/aspecto.css" rel="stylesheet">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <scrip src="js/Recuperar.js"></scrip>
    <title>Document</title>

</head>

<body>
    <div class="error">
        <span>Datos de Ingreso no Validos, intentalo de nuevo por favor</span>
    </div>
    <form action="Contra.php" method="post">


        <div class="conten2">

            <img src="jpg/user.png" class="user">
            <label style="color:#fff">Tipo de Usuario:</label>
            <br>
            <input type="text" name="usuario" placeholder="Administrador / Tecnico" autocomplete="off"
                pattern="[A-Za-z0-9_-]{4,15}">
            <br>
            <label style="color:#fff">Preguntas de Seguridad:</label>
            <br>
            <input type="text" name="contrato" placeholder="Numero de contrato" autocomplete="off"
                pattern="[A-Za-z0-9_-]{4,15}">
            <input type="text" name="cedula" placeholder="Numero de Cedula" autocomplete="off"
                pattern="[A-Za-z0-9_-]{4,15}">
            <br>
            <input type="submit" class="bt btn-primary" id="val" value="Validar">

        </div>




    </form>



</body>




</html>