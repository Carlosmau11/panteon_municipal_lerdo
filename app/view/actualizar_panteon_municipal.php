<?php

$id_sepulcro_panteon_municipal = $_GET['id_sepulcro_panteon_municipal'];
require_once ("../../app/model/db.php");
$consulta = "SELECT * FROM sepulcro_panteon_municipal WHERE id_sepulcro_panteon_municipal = $id_sepulcro_panteon_municipal";
$resultado = mysqli_query($conexion, $consulta);
$panteon_municipal = mysqli_fetch_assoc($resultado);

?>
<?php require '../../app/model/db.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro Panteon Municipal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <style>
    body {
        background-image: url('../../public/img/FotoPanteon10.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .card {
        background-color: rgba(255, 255, 255, 0);
        /* Fondo blanco semi-transparente para la tarjeta */
    }

    /* Resto de tu código CSS */
    </style>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h3 class="text-center">Actualizar Registro Panteon Municipal</h3>
            </div>
            <div class="card-body">
                <form action="../../app/model/functions_Db.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Columna 1: Datos Personales Parte 1 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_sepulcro_panteon_municipal">Id Panteon
                                    Municipal:</label>
                                <input type="text" class="form-control" id="id_sepulcro_panteon_municipal"
                                    name="id_sepulcro_panteon_municipal"
                                    value="<?php echo $panteon_municipal ['id_sepulcro_panteon_municipal']; ?>"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_propietario">Id Propietario:</label>
                                <input type="text" class="form-control" id="id_propietario" name="id_propietario"
                                    value="<?php echo $panteon_municipal ['id_propietario']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_difunto">Id Difunto:</label>
                                <input type="text" class="form-control" id="id_difunto" name="id_propietario"
                                    value="<?php echo $panteon_municipal ['id_difunto']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="tipo_pago">Tipo Pago:</label>
                                <input type="text" class="form-control" id="tipo_pago" name="tipo_pago"
                                    value="<?php echo $panteon_municipal ['tipo_pago']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="observacion">Observacion:</label>
                                <input type="text" class="form-control" id="observacion" name="observacion"
                                    value="<?php echo $panteon_municipal ['observacion']; ?>" required>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="mb-3">
                <input type="hidden" name="accion" value="editar_panteon_municipal">
                <input type="hidden" name="id_sepulcro_panteon_municipal"
                    value="<?php echo $_GET['id_sepulcro_panteon_municipal']; ?>">
                <button type="submit" class="btn btn-success">Guardar</button>
                <button class="btn btn-danger" style="text-decoration: none; color: white;">
                    <a href="difuntos.php" style="color: white;">Cancelar</a>
                </button>
            </div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>