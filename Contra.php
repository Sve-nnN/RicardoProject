<?php

require 'conexion.php';
sleep (1);
session_start();

$usuarios = $mysqli->query("SELECT nombre, cedula, clave, id, tipo 
FROM usuarios 
WHERE usuario = '".$_POST['usuario']."' 
AND contrato = '".$_POST['contrato']."'
AND cedula = '".$_POST['cedula']."'");

if($usuarios->num_rows == 1):

    $datos = $usuarios->fetch_assoc();

    $_SESSION['user'] = $datos;

if(isset($_SESSION['user'])){
    
        if($_SESSION['user']['usuatio'] == "admin"){
            header("location: adminclave.php");
        }else{
            header("location: tecnicoclave.php");
        }
    }
endif;
    
if ($usuarios->num_rows == 0):
     
    echo'<script>
    alert("Los Parametros Ingresados Son Incorrectos por Favor intente de nuevo");
    window.history.go(-1);
    </script>';

endif;


$mysqli->close();
