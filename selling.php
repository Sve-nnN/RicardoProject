<?php

include 'conexion.php';


$where = "";

if (!empty($_POST)) {

    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE id_nombre='$valor'";
    }
}


$sql = "SELECT * FROM venta $where";
$resultado = $mysqli->query($sql);

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
    <title>Listado de Productos en Stock</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <h2 style="text-align:center"> Listado de Productos </h2>

        </div>
        <div class="row">

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">



                <div class="input-group col-xs-4 posicion3">

                    <input type="text" class="form-control" placeholder="ID" id="campo" name="campo">

                    <div class="input-group-btn">
                        <button class="btn btn-default" id="enviar" name="enviar" type="submit"><i
                                class="glyphicon glyphicon-search"></i></button>

                        <a href="Tecnico.php" class="btn btn-danger">Regresar</a>
                    </div>

                </div>
            </form>

            <div class="row table-responsive login-box">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>
                                <center>Tipo</center>
                            </th>
                            <th>Fecha de Adq.</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Distribuidor</th>
                            <th>Costo</th>
                            <th>Descripcion</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['id_nombre'];  ?></td>
                            <td><?php echo $row['nombre'];  ?></td>
                            <td><?php echo $row['tipo'];  ?></td>
                            <td><?php echo $row['fecha'];  ?></td>
                            <td><?php echo $row['marca'];  ?></td>
                            <td><?php echo $row['modelo'];  ?></td>
                            <td><?php echo $row['stock'];  ?></td>
                            <td><?php echo $row['distribuidor'];  ?></td>
                            <td><?php echo $row['costo'];  ?></td>
                            <td><?php echo $row['descripcion'];  ?></td>
                            <td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span
                                        class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>