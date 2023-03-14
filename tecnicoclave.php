<?php  
include 'conexion.php';

session_start();

if(isset($_SESSION['user'])){
 //echo "hola " .$_SESSION['user']['id'];
                       
}


?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link href="css/aspecto.css" rel="stylesheet"> 
        <title>Recuperación</title>
        
        
<script>
function comprobarClave(){
    clave = document.f1.clave.value
    clave2 = document.f1.clave2.value

    if (clave == clave2)
      
       {
      
           document.f1.submit();
           
       }
                
    else
       
        $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },3000);

}
</script> 
            
    </head>
    
    <body>
        
        <div class="error">
      <span>Las Contraseña selecionada no son Iguales</span>
       </div>
        
       
        <div class="salir">
        
        <a href="salir.php" style="margin-left:95%; margin-top:2%;" class="btn btn-danger">Salir</a>   
        
        </div>
        
        <form action="oldpass.php" method="POST" name="f1" id="f1">
           
            <div class="conten2">
              <img src="jpg/user.png" class="user">
              <br>
               <label style="color:#fff" >Introduzca Nueva Contraseña</label>
               <br>
                <input type="password" placeholder="Insertar Contraseña" style="margin-top:15px;" name="clave" required>
                <br>
                <input type="password" placeholder="Repita Contraseña" name="clave2" required>
                <br>
                <input type="button" value="Guardar" style="margin-left:50px;" class="btn btn-primary" onClick="comprobarClave()">
                
                <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id']; ?>" />
            
              </div>
        </form>
    </body>
</html>