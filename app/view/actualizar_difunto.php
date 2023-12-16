<?php

$id = $_GET['id_difuntos'];
require_once ("../../app/model/db.php");
$consulta = "SELECT * FROM difuntos WHERE id_difuntos = $id";
$resultado = mysqli_query($conexion, $consulta);
$propietario = mysqli_fetch_assoc($resultado);

?>
<?php require '../../app/model/db.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro en el Padrón Municipal del Cementerio</title>
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
                <h3 class="text-center">Actualizar Difunto</h3>
            </div>
            <div class="card-body">
                <form action="../../app/model/functions_Db.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Columna 1: Datos Personales Parte 1 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="nombre">Nombre Completo:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="<?php echo $propietario ['nombre']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="sexo">Sexo:</label>
                                <select class="form-control" id="sexo" name="sexo" required>
                                    <option value="Masculino"
                                        <?php if ($propietario['sexo'] == 'Masculino') echo 'selected'; ?>>Masculino
                                    </option>
                                    <option value="Femenino"
                                        <?php if ($propietario['sexo'] == 'Femenino') echo 'selected'; ?>>Femenino
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="fecha">Fecha de
                                    nacimiento:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha"
                                    value="<?php echo $propietario ['fecha']; ?>" required>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="mb-3">
                <input type="hidden" name="accion" value="editar_difunto">
                <input type="hidden" name="id_difuntos" value="<?php echo $_GET['id_difuntos']; ?>">
                <button type="submit" class="btn btn-success">Guardar</button>
                <button class="btn btn-danger" style="text-decoration: none; color: white;">
                    <a href="index.php" style="color: white;">Cancelar</a>
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