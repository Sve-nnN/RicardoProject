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
        
        <title>Actualizar</title>
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <h3 style="text-align:center"></h3>
            </div>
            <div class="contenedor-input">
          
            <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
           
               <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
           
				<div class="form-group">
					<label for="Nombre" class="col-sm-2 control-label">Id</label>
					<div class="col-xs-8 input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="id_nombre" type="text" class="form-control" name="id_nombre" placeholder="Nombre" value="<?php echo $row['id_nombre']; ?>" required>  
					</div>
			</div>
                
                <div class="form-group">
					<label for="Apellido" class="col-sm-2 control-label">Nombre</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
                   
                   
                <div class="form-group">
					<label for="Modelo" class="col-sm-2 control-label">Modelo</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
	                    <input id="modelo" type="text" class="form-control" name="modelo" placeholder="modelo" value="<?php echo $row['modelo']; ?>" required>
					</div>
				</div>
                
                <div class="form-group">
					<label for="Marca" class="col-sm-2 control-label">Marca</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
	                   <input id="marca" type="text" class="form-control" name="marca" placeholder="Marca" value="<?php echo $row['marca']; ?>" required>
					</div>
				</div>
           
               <div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">Tipo</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
	                    <input id="tipo" type="text" class="form-control" name="tipo" placeholder="Tipo" value="<?php echo $row['tipo']; ?>" required>
					</div>
				</div>
              
               <div class="form-group">
					<label for="lnf" class="col-sm-2 control-label">Fecha</label>
					<div class="col-xs-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	                   <input id="lnf" type="text" class="form-control" name="fecha" placeholder="Fecha de Nacimiento" value="<?php echo $row['fecha']; ?>" required>
					</div>
				</div>
            
                <div class="form-group">
					<label for="Stock" class="col-sm-2 control-label">Stock</label>
					<div class="col-sm-8 input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
	                    <input id="stock" type="text" class="form-control" name="stock" placeholder="Stock de Producto" value="<?php echo $row['stock']; ?>" required>
					</div>
				</div>
            
                <div class="form-group btn2">
					    <div class="pos2">
						<a href="Admin.php" class="btn btn-default">Regresar</a>
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