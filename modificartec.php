<?php  
include 'conexion.php';

$id = $_GET['id'];

$sql="SELECT * FROM estudiantes WHERE id='$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);


?>


<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
        
        <title>Document</title>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <h3 style="text-align:center"></h3>
            </div>
            <div class="contenedor-input">
          
            <form class="form-horizontal" method="POST" action="updatec.php" autocomplete="off">
           
               <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
           
				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-xs-8 input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="Nombre" type="text" class="form-control" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>" required>  
					</div>
			</div>
                
                <div class="form-group">
					<label for="Apellido" class="col-sm-2 control-label">Apellido</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                    <input id="Apellido" type="text" class="form-control" name="Apellido" placeholder="Apellido" value="<?php echo $row['Apellido']; ?>" required>
					</div>
				</div>
                   
                   
                <div class="form-group">
					<label for="Cedula" class="col-sm-2 control-label">Cedula</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
	                    <input id="Cedula" type="text" class="form-control" name="Cedula" placeholder="Cedula" value="<?php echo $row['Cedula']; ?>" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="Telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
	                   <input id="Telefono" type="text" class="form-control" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']; ?>" required>
					</div>
				</div>
           
               <div class="form-group">
					<label for="Historia" class="col-sm-2 control-label">version 2</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
	                    <input id="Historia" type="text" class="form-control" name="Historia" placeholder="Historia" value="<?php echo $row['Historia']; ?>" required>
					</div>
				</div>
              
               <div class="form-group">
					<label for="lnf" class="col-sm-2 control-label">L.F.N</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	                   <input id="lnf" type="text" class="form-control" name="lnf" placeholder="Lugar y Fecha de Nacimiento" value="<?php echo $row['lnf']; ?>" required>
					</div>
				</div>
            
                <div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
	                    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Lugar y Fecha de Nacimiento" value="<?php echo $row['direccion']; ?>" required>
					</div>
				</div>
            
                <div class="form-group btn2">
					    <div class="pos2">
						<a href="Tecnico.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-default2">Guardar</button>
                </div>
                <div class="user">
                     <img src="jpg/Diente.png" class="user">
                </div>
                 
               </div>
            </form>
            </div>
        </div>
    </body>
</html>