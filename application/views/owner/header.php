<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>LUNNO</title>

    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/admin.css') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link href="<?php echo base_url('assets/css/material-bootstrap-wizard.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/demo.css') ?>" rel="stylesheet" />
    
  </head>
  <body style="padding: 0px; font-size: 15px;">
    	
   <div id="wrapper">
   	<nav class="navbar navbar-default"  style="background-color: #16a085;">
   		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Owner</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><span style="font-size: 15px; padding-right: 25px; color: white">Selamat Datang, <?php echo $_SESSION['owner']['nama_owner']; ?>!</span><span class="glyphicon glyphicon-user"  style="font-size: 15px; padding-right: 100px"></span></a>
          </li>
    </ul>
   	</nav>
   	<nav class="navbar-default navbar-side" style="background: #222f3e">
   		<div class="sidebar-collapse">
   			<ul class="nav" id="main menu">
   				<li><a href="<?php echo base_url('owner/dashboard_owner') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
   				<li><a href="<?php echo base_url('owner/droom') ?>"><i class="fa fa-user-plus"></i> Masukkan Homestay Anda</a></li>
          <li><a href="<?php echo base_url('owner/datahome') ?>"><i class="fa fa-hotel"></i> Data Homestay</a></li>
   				<li><a href="<?php echo base_url('owner/pemesanan') ?>"><i class="fa fa-shopping-cart"></i> Data Pemesanan</a></li>
          <!-- <li><a href="<?php echo base_url('owner/pengaturan') ?>">Pengaturan</a></li> -->
   				<li><a href="<?php echo base_url('owner/dashboard_owner/logout') ?>"><i class="fa fa-sign-out"></i>Log Out</a></li>
   			</ul>
   		</div>
   	</nav>
   	<div id="page-wrapper">
   		<div id="page-inner">