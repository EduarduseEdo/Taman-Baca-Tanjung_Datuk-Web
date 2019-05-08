<?php
	require_once '../lib/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Taman Baca Tanjung Datuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- header -->
		  <header class="main-header">
		    <!-- Logo -->
		    <a href="index" class="logo">
		      <!-- mini logo for sidebar mini 50x50 pixels -->
		      <span class="logo-mini"><b>Tanjung</b> Datuk</span>
		      <!-- logo for regular state and mobile devices -->
		      <span class="logo-lg"><b>Tanjung</b> Datuk</span>
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
	          		<li>
	            		<a href="../" target="blank"><i class="glyphicon glyphicon-eye-open"></i><b>  Lihat Website</b></a>
	            	</li>
		          <!-- User Account: style can be found in dropdown.less -->
		          <li class="dropdown user user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <img src="../dist/img/avataribm.png" class="user-image" alt="User Image">
		               <span class="hidden-xs"><b>Tanjung Datuk</b></span>
		            </a>
		            <ul class="dropdown-menu">
		              <!-- User image -->
		              <li class="user-header">
		                <img src="" class="img-circle" alt="User Image">
		                 <p>
		                  Taman Baca Tanjung Datuk
		                  <small>Terbentuknya Taman Baca Tanjung Datuk Untuk Mencerdaskan Bangsa, UUD 1945</small>
		                </p>
		              </li>
		              <!-- Menu Body -->
		              <!-- Menu Footer-->
		              <li class="user-footer">
		                <div class="pull-left">
		                   <a href="#" class="btn btn-default btn-flat">Ubah Password</a>
		                </div>
		              </li>
		            </ul>
		          </li>
		        </ul>
		      </div>
		    </nav>
		  </header>
		<!-- end of header -->
		<!-- Left side column. contains the sidebar -->
		  <aside class="main-sidebar">
		    <!-- sidebar: style can be found in sidebar.less -->
		    <section class="sidebar">
		      <!-- Sidebar user panel -->
		      <div class="user-panel">
		        <div class="pull-left image">
		          <img src="../dist/img/avataribm.png" class="img-circle" alt="User Image">
		        </div>
		        <div class="pull-left info">
		          <p>Admin</p>
		          <a href="../dist/img/avataribm.png"><i class="fa fa-circle text-success"></i> Online</a>
		        </div>
		      </div>
		      <!-- sidebar menu: : style can be found in sidebar.less -->
		      <ul class="sidebar-menu" data-widget="tree">
		        <!-- menu untuk super admin -->
		            <!-- menu -->
		            <li class="header">MENU UTAMA</li>
		            <li><a href="index.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
		            <li><a href="#"><i class="fa fa-question-circle"></i> <span>Tentang</span></a></li>
		            <li><a href="#"><i class="fa fa-hand-paper-o"></i> <span>Donasi</span></a></li>
		            <li><a href="daftar-buku.php"><i class="fa fa-list-alt"></i> <span>Daftar Buku</span></a></li>
		            <li><a href="#"><i class="fa fa-envelope"></i> <span>Kontak</span></a></li>
		            <li><a href="logout.php"><i class="fa fa-sign-out text-danger"></i> <span class="text-danger">Logout</span></a></li>
		            <!-- akhir menu -->
		      </ul>
		    </section>
		    <!-- /.sidebar -->
		  </aside>
		<!-- Content Wrapper. Contains page content -->
  		<div class="content-wrapper">