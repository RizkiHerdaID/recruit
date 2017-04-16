<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT. Mangli Djara Raya</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>css/skins/skin-blue-light.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datatables/dataTables.bootstrap.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?= base_url() ?>plugins/datepicker/datepicker3.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico">
</head>
<body class="hold-transition skin-blue-light sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?= site_url('dashboard') ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>R</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>E-</b>Recruitment</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= base_url() ?>/images/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Destian Yoga Pradipta</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?= base_url() ?>images/user2-160x160.jpg" class="img-circle"
                                     alt="User Image">
                                <p>
                                    Destian Yoga Pradipta - Web Developer
                                    <small>PSSI - Universitas Jember</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= site_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign
                                        out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= base_url() ?>/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Destian Yoga Pradipta</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN</li>
                <li class="treeview">
                    <a href="<?= site_url('dashboard') ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?= site_url('employee') ?>">
                        <i class="fa fa-users"></i> <span>Pegawai</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?= site_url('position') ?>">
                    <i class="fa fa-tags"></i> <span>Jabatan</span>
                    </a>
                </li>
                <li class="header">RECRUITMENT</li>
                <li class="treeview">
                    <a href="<?= site_url('candidate') ?>">
                    <i class="fa fa-briefcase"></i> <span>Daftar Kandidat</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?= site_url('interview') ?>">
                    <i class="fa fa-street-view"></i> <span>Tahap Wawancara</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?= site_url('competency') ?>">
                    <i class="fa fa-check-square-o"></i> <span>Uji Kemampuan</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?= site_url('result') ?>">
                    <i class="fa fa-flag"></i> <span>Hasil Penilaian</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?= site_url('result/archive') ?>">
                    <i class="fa fa-archive"></i> <span>Arsip</span>
                    </a>
                </li>
                <li class="header">MANAGEMENT</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Profil</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Pengguna</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php
            $arrayMessage = $this->session->flashdata('message');
            if($arrayMessage){
                $type = $arrayMessage[0];
                $message = $arrayMessage[1];
                if($type === "info"){
                    $icon = 'info';
                } elseif ($type === 'danger'){
                    $icon = 'ban';
                } elseif ($type === 'warning') {
                    $icon = 'warning';
                } elseif ($type === 'success') {
                    $icon = 'check';
                }
            }
        ?>
        <?php if($arrayMessage && $type && $message && $icon): ?>
        <div class="alert alert-<?=$type?> alert-dismissible" style="margin: 1em 1em" id="message">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-<?=$icon?>"></i> <?=$message?>
        </div>
        <?php endif; ?>
        <!-- Main content -->
        <?php $page = str_replace('.', '/', $page) ?>
        <?php $this->load->view($page) ?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2014-2017 <a href="#">Destian Yoga Pradipta</a>.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3.2.1 -->
<script src="<?= base_url() ?>js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url() ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>plugins/fastclick/fastclick.js"></script>
<!-- Number Format-->
<script src="<?= base_url() ?>plugins/numberformat/jquery.number.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>js/app.min.js"></script>
<script>
    // Untuk Halaman Index Pegawai
    $(function () {
        $('#employee').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    // Date picker
    $('.datepicker').datepicker({
        autoclose: true
    });

    // Number Format
    $('.currency').number(true, 0, ',', '.');

    // Message Pop Up
    $(function() {
        setTimeout(function() {
            $("#message").fadeOut('slow');
        }, 3000);
    });
</script>
</body>
</html>
