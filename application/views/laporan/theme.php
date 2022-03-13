<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RiauOnline | Report</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://riauonline.co.id/laporan/assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://riauonline.co.id/laporan/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://riauonline.co.id/laporan/assets/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://riauonline.co.id/laporan/assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="https://riauonline.co.id/laporan/assets/bootstrap-daterangepicker/daterangepicker.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://riauonline.co.id/laporan/assets/dist/css/AdminLTE.min.css">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="https://riauonline.co.id/laporan/assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>ON</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RON</b>Report</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          
          <!-- Control Sidebar Toggle Button -->
          
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
          <img src="https://www.riauonline.co.id/images/user4-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<li>
          <a href="https://riauonline.co.id/laporan/">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Laporan</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="https://riauonline.co.id/laporan/laporan-editor"><i class="fa fa-circle-o"></i> Laporan Editor</a></li>
            <li><a href="https://riauonline.co.id/laporan/laporan-penulis"><i class="fa fa-circle-o"></i> Laporan Penulis</a></li>
          </ul>
        </li>
       
        <li>
          <a href="https://riauonline.co.id/laporan/polling/">
            <i class="fa fa-bar-chart"></i> <span>Polling</span>
          </a>
        </li>
        <li>
          <a href="https://riauonline.co.id/laporan/logout">
            <i class="fa fa-sign-out"></i> <span>Keluar</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<?php $this->load->view($view); ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="https://riauonline.co.id">RiauOnline.co.id</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://riauonline.co.id/laporan/assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://riauonline.co.id/laporan/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="https://riauonline.co.id/laporan/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="https://riauonline.co.id/laporan/assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://riauonline.co.id/laporan/assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="https://riauonline.co.id/laporan/assets/fastclick/lib/fastclick.js"></script>
<!-- date-range-picker -->
<script src="https://riauonline.co.id/laporan/assets/moment/min/mmt.js"></script>
<script src="https://riauonline.co.id/laporan/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="https://riauonline.co.id/laporan/assets/dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
	window.setInterval(function(){
		$( "#hit" ).load(window.location.href + " #hit" );
		$( "#hit_bulanan" ).load(window.location.href + " #hit_bulanan" );
	}, 1000);
  })
  //Date range picker
  $('#reservation').daterangepicker()

  $(function () {
    $('#example1').DataTable()
  })

  //Date range picker with time picker
  $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
</script>
</body>
</html>
