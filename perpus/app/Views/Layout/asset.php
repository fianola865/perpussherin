<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Buku' ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">TOKO BUKU TERSERAH</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/buku/index" class="nav-link">
                                <p>
                                    Buku
                                </p>
                            </a>
                        </li>
                        <!--koleksi-->
                        <li class="nav-item">
                            <a href="koleksi" class="nav-link">
                                <p>
                                    Koleksi
                                </p>
                            </a>
                        </li>
                        <!--peminjaman-->
                        <li class="nav-item">
                            <a href="/peminjaman" class="nav-link">
                                <p>
                                    Peminjaman
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengembalian" class="nav-link">
                                <p>
                                    Pengembalian
                                </p>
                            </a>
                        </li>
                        <!--kategori buku-->
                        <li class="nav-item">
                            <a href="/kategori" class="nav-link">
                                <p>
                                    Kategori buku
                                </p>
                            </a>
                        </li>
                        <!--user-->
                        <li class="nav-item">
                            <a href="/user" class="nav-link">
                                <p>
                                    user
                                </p>
                            </a>
                        </li>
                        <!--ulasan buku-->
                        <li class="nav-item">
                            <a href="/kategori" class="nav-link">
                                <p>
                                    ulasan buku
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
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>&copy; <?= date('Y') ?> <a href="#">sherin</a>.</strong>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>
</html>
