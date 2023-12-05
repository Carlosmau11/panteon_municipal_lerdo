<?php

$id_servicios = $_GET['id_servicios'];
require_once ("../../app/model/db.php");
$consulta = "SELECT * FROM servicios WHERE id_servicios = $id_servicios";
$resultado = mysqli_query($conexion, $consulta);
$servicios = mysqli_fetch_assoc($resultado);

?>
<?php require '../../app/model/db.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro Servicios</title>
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
                <h3 class="text-center">Actualizar Registro Servicios</h3>
            </div>
            <div class="card-body">
                <form action="../../app/model/functions_Db.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Columna 1: Datos Personales Parte 1 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_servicios">Id Servicio:</label>
                                <input type="text" class="form-control" id="id_servicios" name="id_servicios"
                                    value="<?php echo $servicios ['id_servicios']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_propietario">Id Propietario:</label>
                                <input type="text" class="form-control" id="id_propietario" name="id_propietario"
                                    value="<?php echo $servicios ['id_propietario']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_sepulcro_panteon_municipal">Id
                                    Sepulcro
                                    Municipal:</label>
                                <input type="text" class="form-control" id="id_sepulcro_panteon_municipal"
                                    name="id_sepulcro_panteon_municipal"
                                    value="<?php echo $servicios ['id_sepulcro_panteon_municipal']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="tipo_pago">Tipo Servicio:</label>
                                <input type="text" class="form-control" id="id_tipo_servicio" name="id_tipo_servicio"
                                    value="<?php echo $servicios ['id_tipo_servicio']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="boleta">Boleta:</label>
                                <input type="text" class="form-control" id="boleta" name="boleta"
                                    value="<?php echo $servicios ['boleta']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="mes">Mes:</label>
                                <input type="text" class="form-control" id="mes" name="mes"
                                    value="<?php echo $servicios ['mes']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="fecha">Fecha:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha"
                                    value="<?php echo $servicios ['fecha']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="mes">Panteon:</label>
                                <input type="text" class="form-control" id="panteon" name="panteon"
                                    value="<?php echo $servicios ['panteon']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="mes">Datos complementarios:</label>
                                <input type="text" class="form-control" id="datos_complementarios"
                                    name="datos_complementarios"
                                    value="<?php echo $servicios ['datos_complementarios']; ?>" required>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="mb-3">
                <input type="hidden" name="accion" value="editar_servicios">
                <input type="hidden" name="id_servicios" value="<?php echo $_GET['id_servicios']; ?>">
                <button type="submit" class="btn btn-success">Guardar</button>
                <button class="btn btn-danger" style="text-decoration: none; color: white;">
                    <a href="Servicios.php" style="color: white;">Cancelar</a>
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