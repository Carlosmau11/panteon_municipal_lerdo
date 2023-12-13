<?php require '../../app/model/db.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lerdo de Tejada - Panteon Jardin</title>

    <!-- Custom fonts for this template -->
    <link href="../../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../public/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-10">
                    <img src="../../public/img/lerdo3.png" alt="" width="70" height="70"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Menu</div>
            </a>

            <!-- Divider -->
            <br>
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Tablas
            </div>


            <!-- Nav Item - Tables -->

            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Propietarios</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Difuntos.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sepulcro Panteon Municipal</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="PanteonJardin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sepulcro Panteon Jardin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Servicios.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Servicios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Salir</span>
                                <img src="../../public/img/centenario2.png" alt="" width="130" height="80">
                            </a>
                            <!-- Dropdown - User Information -->
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Datos del Panteon Jardin de los Recuerdos</h1>
                        <a href="mapeo.php" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                            style="background-image: url('../../public/img/mapa.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center">
                            ' ' </a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Datos Guardados</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Sepulcro Jardin</th>
                                            <th>ID Propietario</th>
                                            <th>ID Difunto</th>
                                            <th>Tipo Pago</th>
                                            <th>Calle</th>
                                            <th>Etapa</th>
                                            <th>Letra</th>
                                            <th>Lote</th>
                                            <th>Observacion</th>
                                            <th>Actualizar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $sql = "SELECT * FROM sepulcro_panteon_jardin";
                                        $propietario = mysqli_query($conexion, $sql);
                                        if($propietario -> num_rows > 0){
                                        foreach($propietario as $key => $row ){
                                        ?>
                                        <?php
                                        ?>

                                        <tr>
                                            <td><?= $row["id_sepulcro_panteon_jardin"] ?></td>
                                            <td><?php echo $row['id_propietario']; ?></td>
                                            <td><?php echo $row['id_difunto']; ?></td>
                                            <td><?php echo $row['tipo_pago']; ?></td>
                                            <td><?php echo $row['calle']; ?></td>
                                            <td><?php echo $row['etapa']; ?></td>
                                            <td><?php echo $row['calle']; ?></td>
                                            <td><?php echo $row['lote']; ?></td>
                                            <td><?php echo $row['observacion']; ?></td>
                                            <td>
                                                <button class="btn btn-info"
                                                    style="text-decoration: none; color: white;">
                                                    <a href="actualizar_panteon_jardin.php?id_sepulcro_panteon_jardin=<?php echo $row['id_sepulcro_panteon_jardin']?>"
                                                        style="color: white;">Editar</a>
                                                </button>

                                                <a></a>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger"
                                                    style="text-decoration: none; color: white;">
                                                    <a href="eliminar_panteon_jardin.php?id_sepulcro_panteon_jardin=<?php echo $row['id_sepulcro_panteon_jardin']?>"
                                                        style="color: white;">Eliminar</a>
                                                </button>

                                                <a></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        }else{

                                            ?>
                                        <tr class="text-center">
                                            <td colspan="4">No existe registros</td>
                                        </tr>

                                        <?php
                                         }?>
                                    </tbody>
                                </table>

                                <!-- Divider -->
                                <hr class="sidebar-divider d-none d-md-block">

                                <a href="agregar_panteon_jardin.php"
                                    class="d-none d-sm-inline-block btn btn-lg btn-primary rounded-circle shadow-sm float-right">
                                    +</a>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>H. Ayuntamiento de Lerdo de Tejada, Periodo 2022 - 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
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

    <!-- Bootstrap core JavaScript-->
    <script src="../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../public/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../public/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../public/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../public/js/demo/datatables-demo.js"></script>

</body>

</html>