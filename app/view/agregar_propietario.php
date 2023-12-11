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
                <h3 class="text-center">Registro en el Padrón Municipal</h3>
            </div>
            <div class="card-body">
                <form action="../../app/model/functions_db.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Columna 1: Datos Personales Parte 1 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="nombre_completo">Nombre Completo:</label>
                                <input type="text" class="form-control" id="nombre_completo" name="nombre_completo"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="sexo">Sexo:</label>
                                <select class="form-control" id="sexo" name="sexo" required>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="fecha_nacimiento">Fecha de
                                    nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="edad">Edad:</label>
                                <input type="text" class="form-control" id="edad" name="edad" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="curp">CURP:</label>
                                <input type="text" class="form-control" id="curp" name="curp" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="celular">Telefono Celular:</label>
                                <input type="text" class="form-control" id="celular" name="celular" required>
                            </div>
                        </div>

                        <!-- Columna 2: Datos Personales Parte 2 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="foto">Foto:</label>
                                <input type="file" class="form-control-file" name="foto" id="foto" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="correo">Correo Electronico:</label>
                                <input type="text" class="form-control" id="correo" name="correo" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="comprobante_domicilio">Comprobante de
                                    Domicilio:</label>
                                <input type="file" class="form-control-file" name="comprobante_domicilio"
                                    id="comprobante_domicilio" accept=".pdf" required>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="mb-3">
                <input type="hidden" name="accion" value="agregar_propietario">
                <button type="submit" class="btn btn-success">Agregar</button>
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