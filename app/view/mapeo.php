<?php require '../../app/model/db.php' ?>
<?php
    // Establecer la conexión a la base de datos
    $con = mysqli_connect("localhost", "root", "1234qwerty", "syscopa");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $query = "SELECT sepulcro_panteon_jardin.calle, sepulcro_panteon_jardin.id_difunto, sepulcro_panteon_jardin.etapa, sepulcro_panteon_jardin.tipo_pago, sepulcro_panteon_jardin.letra,  sepulcro_panteon_jardin.observacion, sepulcro_panteon_jardin.lote, propietario.id_propietario, propietario.nombre_completo, propietario.sexo 
          FROM sepulcro_panteon_jardin 
          INNER JOIN propietario ON sepulcro_panteon_jardin.id_propietario = propietario.id_propietario";
    
$result = mysqli_query($con, $query);

$mapeo = array();

// Procesar los resultados de la consulta
while ($row = mysqli_fetch_assoc($result)) {
    $propietarioId = $row['id_propietario'];
    $id_difunto = $row['id_difunto'];
    $nombreCompleto = $row['nombre_completo'];
    $tipo_pago = $row['tipo_pago'];
    $etapa = $row['etapa'];
    $calle = $row['calle'];
    $letra = $row['letra'];
    $lote = $row['lote'];
    $observacion = $row['observacion'];

    // Agregar la calle y el propietario al array (si no existen)
    if (!isset($mapeo[$calle])) {
        $mapeo[$calle] = array();
    }

    // Agregar la información del propietario a la calle
    $mapeo[$calle][] = array(
        'id' => $propietarioId,
        'id_difunto' => $id_difunto,
        'nombre' => $nombreCompleto,
        'calle' => $calle,
        'etapa' => $etapa,
        'tipo_pago' => $tipo_pago,
        'letra' => $letra,
        'lote' => $lote,
        'observacion' => $observacion
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lerdo de Tejada - Tablas</title>


    <link href="../../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link href="../../public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../public/css/grid.css" rel="stylesheet">



    <link href="../../public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <div id="wrapper">


        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-10">
                    <img src="../../public/img/lerdo3.png" alt="" width="70" height="70"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Menu</div>
            </a>


            <br>
            <hr class="sidebar-divider my-0">



            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Tablas
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Propietarios</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Difuntos.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sepulcro Panteon Municipal</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="PanteonJardin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sepulcro Panteon Jardin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Servicios.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Servicios</span></a>
            </li>


            <hr class="sidebar-divider d-none d-md-block">


            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">


            <div id="content">


                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>


                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Salir</span>
                                <img src="../../public/img/centenario2.png" alt="" width="130" height="80">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Visualizando Mapeo General</h1>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Mostrando mapeo</h6>
                        </div>
                        <main>
                            <div class="container">
                                <?php foreach ($mapeo as $calle => $propietarios): ?>
                                <div class="row mb-3 text-center mt-4 py-2">
                                    <div class="col-xl-12 themed-grid-col">Calle: <?php echo $calle; ?></div>
                                </div>

                                <div class="row mb-3 text-center">
                                    <?php foreach ($propietarios as $propietario): ?>
                                    <div class="col-2 mx-3 themed-grid-col">
                                        <a href="#" data-toggle="modal"
                                            data-target="#modalPropietario<?php echo $propietario['id']; ?>">
                                            <?php echo $propietario['nombre']; ?>
                                        </a>
                                    </div>

                                    <!-- Modal PROPIETARIO -->
                                    <div class="modal fade" id="modalPropietario<?php echo $propietario['id']; ?>"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark">
                                                    <h5 class="modal-title fw-bold  text-white"
                                                        id="exampleModalLongTitle">Datos del
                                                        Propietario</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Id Propietario: <?php echo $propietario['id']; ?></h5>
                                                    <br>
                                                    <h5>Id Difunto: <?php echo $propietario['id_difunto']; ?></h5>
                                                    <br>
                                                    <h5>Nombre Propietario: <?php echo $propietario['nombre']; ?> </h5>
                                                    <br>
                                                    <h5>Tipo Pago: <?php echo $propietario['tipo_pago']; ?></h5>
                                                    <br>
                                                    <h5>Calle: <?php echo $propietario['calle']; ?></h5>
                                                    <br>
                                                    <h5>Etapa: <?php echo $propietario['etapa']; ?></h5>
                                                    <br>
                                                    <h5>Letra: <?php echo $propietario['letra']; ?></h5>
                                                    <br>
                                                    <h5>Lote: <?php echo $propietario['lote']; ?></h5>
                                                    <br>
                                                    <h5>Observacion: <?php echo $propietario['observacion']; ?></h5>
                                                </div>
                                                <div class="modal-footer bg-dark">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </main>
                    </div>
                </div>
            </div>


            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>H. Ayuntamiento de Lerdo de Tejada, Periodo 2022 - 2025</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Esta Seguro que desea Cerrar Sesion?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Continuar</a>
                </div>
            </div>
        </div>
    </div>


    <script src="../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="../../public/vendor/jquery-easing/jquery.easing.min.js"></script>


    <script src="../../public/js/sb-admin-2.min.js"></script>


    <script src="../../public/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../public/vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <script src="../../public/js/demo/datatables-demo.js"></script>


</body>

</html>