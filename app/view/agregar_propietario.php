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
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Columna 1: Datos Personales Parte 1 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="apellido_paterno">Apellido
                                    Paterno:</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="apellido_materno">Apellido
                                    Materno:</label>
                                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="curp">CURP:</label>
                                <input type="text" class="form-control" id="curp" name="curp" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="rfc">RFC:</label>
                                <input type="text" class="form-control" id="rfc" name="rfc" required>
                            </div>
                        </div>

                        <!-- Columna 2: Datos Personales Parte 2 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="clave_ine">Clave INE:</label>
                                <input type="text" class="form-control" id="clave_ine" name="clave_ine" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="folio_acta">Folio de Acta:</label>
                                <input type="text" class="form-control" id="folio_acta" name="folio_acta" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="fecha_nacimiento">Fecha de
                                    nacimiento:</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="lugar_nacimiento">Lugar de
                                    nacimiento:</label>
                                <input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="sexo">Sexo:</label>
                                <select class="form-control" id="sexo" name="sexo" required>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>

                        </div>


                        <!-- Columna 3: Datos de Contacto y Lugar de Entierro -->
                        <div class="col-md-4">



                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="edad">Edad:</label>
                                <input type="int" class="form-control" id="edad" name="edad" required>
                            </div>


                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="direccion">Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>


                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="direccion">Codigo Postal:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="direccion">Telefono:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="direccion">Correo:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>


                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Agregar</button>
                        <button type="submit" class="btn btn-danger">Modificar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <a href="index.html" class="btn btn-danger"> Regresar</a>
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