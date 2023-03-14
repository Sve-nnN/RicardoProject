<?php

//nos aseguramos que la peticion no vaya vacia y ademas que sea de tipo ajax.

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    
//como resultado puedo saber si mi solicitud es ajax o no
  
    require 'conexion.php';
    sleep(1); 
    session_start();
    
//set_charset Establece el conjunto de caracteres predeterminado del cliente
    
    $mysqli->set_charset('utf8');    
    
//real_escape_string Esta función se usa para crear una cadena SQL legal que se puede usar en una sentencia SQL. La cadena dada es codificada a una cadena SQL escapada, tomando en cuenta el conjunto de caracteres actuales de la conexión, permitiendo escapar cualquier caracter especial que pueda traer el usuario. 
    
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $clave = $mysqli->real_escape_string($_POST['clave']);
    
//mysqli->prepare — Prepara una sentencia SQL para su ejecución
//al colocar "?" le decimos que seran parametros lo que recivira nuestra sentencia
    
    if($nueva_consulta = $mysqli->prepare("SELECT nombre, tipo FROM usuarios WHERE usuario = ? AND clave = ?")){

//bind_param Enlaza variables para los marcadores de parámetros en la instrucción SQL que se envía a mysqli->prepare(). 
//durante la funcion bind_param asignamos los tipos de datos como estos son tipo string asignamos 'ss' y luego los datos      
        
        $nueva_consulta->bind_param('ss', $usuario, $clave);

        $nueva_consulta->execute();

        $resultado = $nueva_consulta->get_result();

        if($resultado->num_rows == 1){
            $datos = $resultado->fetch_assoc();
            
//fetch_assoc: Obtener una fila de resultado como un array asociativo 
//Con json_encode devolvemos de un string con la representación JSON
//json: Es un formato para el intercambio de datos entre el cliente y el servidor a través de Ajax.

            
            $_SESSION['user'] = $datos;
             
            echo json_encode(array('error' => false, 'tipo' => $datos['tipo']));
    
        }else {
            echo json_encode(array('error' => true));
        }
        $nueva_consulta->close();
    }
}

$mysqli->close();
?>