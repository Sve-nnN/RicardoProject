<?php

include 'conexion.php';

session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['tipo'] != "2") {
        header("location: Tecnico.php");
    }
} else if ($_SESSION['user']['usuario'] != "admin") {
    header("location: Admin.php");
}





$where = "";

if (!empty($_POST)) {

    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE id_nombre='$valor'";
    }
}


$sql = "SELECT * FROM estudiantes $where";
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



    <title>Administrador</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <h2 style="text-align:center"> Registro de Productos </h2>

        </div>
        <div class="row">

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">



                <div class="input-group col-xs-4 posicion3">

                    <input type="text" class="form-control" placeholder="ID_Producto" id="campo" name="campo">

                    <div class="input-group-btn">
                        <button class="btn btn-default" id="enviar" name="enviar" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        <a href="descargas/ayuda.pdf" class="btn btn-default2">Ayuda</a>
                        <a href="salir.php" class="btn btn-danger">Salir</a>
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
                                <td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <p><strong></strong></p>
        <a class="btn btn-default" href="fpdf/index.php">Generar PDF</a>
        <br>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
                </div>
                <div class="modal-body">
                    ¿Desea eliminar este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>
</body>

</html>