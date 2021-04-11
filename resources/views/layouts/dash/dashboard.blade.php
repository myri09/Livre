<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Accueil</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">AYA Mariam</a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="margin-top: 50px;">
                            <li class="nav-item">
                                <a href="{{route('dashboard')}}" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Accueil
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-top: 15px;">
                                <a href="{{route('categorie')}}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Categories
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-top: 15px;">
                                <a href="{{route('livre')}}" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Livres
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-top: 15px;">
                                <a href="{{url('/')}}" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Retour Site
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Accueil</h1>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <section class="content ">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-6 col-6 ">
                                <!-- small box -->
                                <div class="small-box bg-info " style="height: 200px;">
                                    <div class="inner ">
                                        <h3>150</h3>
                                        <p>Nombre de Livres</p>
                                    </div>
                                    <div class="icon ">
                                        <i class="ion ion-bag "></i>
                                    </div>
                                    <a href="# " class="small-box-footer " style="margin-top:60px;">
                                            Plus d'info
                                            <i class="fas fa-arrow-circle-right "></i>
                                        </a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-6 col-6 ">
                                <!-- small box -->
                                <div class="small-box bg-success " style="height: 200px;">
                                    <div class="inner ">
                                        <h3>
                                            53
                                        </h3>
                                        <p>Nombre de Categories</p>
                                    </div>
                                    <div class="icon ">
                                        <i class="ion ion-stats-bars "></i>
                                    </div>
                                    <a href="# " class="small-box-footer " style="margin-top:60px;">
                                            Plus d'info
                                            <i class="fas fa-arrow-circle-right "></i>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <script src="plugins/jquery/jquery.min.js "></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js "></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js "></script>
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js "></script>
        <script src="dist/js/adminlte.js "></script>
    </body>

</html>