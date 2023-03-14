<?php  
session_start();
if(isset($_SESSION['user'])){
     if($_SESSION['user']['tipo'] != "1"){
     header("location: Admin.php");
     
     }
} else {
    header("location: Tecnico.php");
}

?>
<!DOCTYPE html>
<html lang="es" >
    <head>
        <meta charset="UTF-8">
        <title>Registro de Productos</title>
        <link  href="css/aspecto.css" rel="stylesheet">
        
        
        
        
        
    </head>
    <body>
      
        <form action="inser.php" method="post" >
           
             <h2 class="form__titulo" ></h2>
            
              <div class="contenedor-input" >
              
               <img src="jpg/Diente.png" class="user">
               
               <h2 style="text-align:center" class="test">Nuevo Registro de Producto</h2>
               
               <input type="text" id="id_nombre" name="id_nombre" placeholder="ID_Producto" class="Caja-1" title="Introducir id del Producto" tabindex="1" required>
               
               <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="Caja-1" title="Introducir Nombre" tabindex="2"required>
                   
             <select name="tipo" class="input-58" tabindex="3">
                    <option>Tipo:</option> 
                    <option value="Periferico Entrada">Periferico Entrada</option> 
                    <option value="Periferico Salida">Periferico Salida</option> 
                    <option value="Periferico Almacenamiento">Periferico Almacenamiento</option> 
               </select>
               
               <!--input type="text" id="Nacionalidad" name="Nacionalidad" placeholder="Nacionalidad" class="Caja-1" title="Introducir Nacionalidad" required-->
               
               <input type="text" id="modelo" name="modelo" placeholder="Modelo" class="Caja-1" title="Introducir Modelo" tabindex="4" required>
               
               
               
               <input type="text" id="stock" name="stock" placeholder="Stock" class="Caja-1" title="Introducir Numero de Stock" tabindex="5" required>
               
               <input type="text" id="distribuidor" name="distribuidor" placeholder="Distribuidor" class="Caja-1" title="Nombre del Distribuidor" tabindex="6" required> 
                
                <select name="marca" class="input-58" tabindex="7">
                    <option>Marca:</option> 
                    <option value="Tp-Link">Tp-Link</option> 
                    <option value="Samsung">Samsung</option>
                     <option value="Western Digital">Western Digital</option>
                      <option value="Biostar">Biostar</option>
                       <option value="Microsoft">Microsoft</option>
                        <option value="Epson">Epson</option> 
               </select>
                
                <!--input type="text" id="sexo" name="sexo" placeholder="Sexo" class="Caja-1" title="Introducir Sexo" required-->   
                
                <input type="date" id="fecha" name="fecha" placeholder="Fecha de Adq" class="Caja-1" title="Introducir Fecha" tabindex="8" required>            
    
               <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion" class="Caja-1" title="Describa el Producto" tabindex="6" required> 
               
              
               
               
                <!--input type="text" id="escolaridad" name="escolaridad" placeholder="Escolaridad" class="Caja-1" title="Introducir Escolaridad" required-->   
                
                <input type="text" id="costo" name="costo" placeholder="Costo en $" class="Caja-1" title="Costo de Entrada" tabindex="6" required> 
                
                
            
                <!--input type="text" id="expresion" name="expresion" placeholder="Expresion" class="Caja-1" title="Introducir Expresion" required-->
                
                <!--textarea name="escolarida" id="escolarida" rows="5" Cols="5" class="caja-2" placeholder="Escolarida" title="Escolarida" required></textarea-->
                
                <input type="submit" value="Guardar Datos" class="btn-enviar"/>
                
               
            </div>
                
        </form>  
        
         <div class="pos5">
             <a href="salir.php" class="button salir">Salir</a>
             <a href="descargas/ayuda.pdf" class="button des">Ayuda</a>
             <a href="Tabla.php" class="button regi">Listado de Productos</a>   
         </div> 
  
  
  
    </body>
</html>