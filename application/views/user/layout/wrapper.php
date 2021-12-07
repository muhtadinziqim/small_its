<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background-color: #5000b3; height: 90px;">
            <div class="container">
                <a href="<?php echo base_url('assets') ?>/index3.html" class="navbar-brand">
                    <img src="<?php echo base_url('assets') ?>/img/Logo_ITS.png" style="height: 70px;" alt="AdminLTE Logo" class="brand-image " style="">
                    <span class="brand-text font-weight-bold" style="font-size: 32px; color: #fff; margin-left: 10px; margin-top: 20px;">SMALL ITS</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->

                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:#fff;">Halaman Utama</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:#fff;">Halaman Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:#fff;">Logout</a>
                        </li>
                    </ul>
                    <!-- Notifications Dropdown Menu -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <?php
        $this->load->view($content);
        ?>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        
        <footer class="main-footer navbar-nav navbar-no-expand" style="background-color: #5000b3;">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline container-md" style="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="color:#fff;">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="color:#fff;">Terms & Condition</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="color:#fff;">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="color:#fff;">Copyright</a>
                    </li>
                </ul>
            </div>
            <!-- Default to the left -->
            <!-- <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets') ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets') ?>/dist/js/demo.js"></script>
</body>

</html>