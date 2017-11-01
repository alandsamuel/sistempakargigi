<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Sistem Pakar</title>
      <link rel="stylesheet" href="<?php echo URL.'assets/css/bootstrap.css'; ?>" />
<link rel="stylesheet" href="<?php echo URL.'assets/css/style.css'; ?>" />
<link rel="stylesheet" href="<?php echo URL.'assets/css/font-awesome.min.css'; ?>" />
<script type="text/javascript" src="<?php echo URL.'assets/js/jQuery.js'; ?>"></script>
<script type="text/javascript" src="<?php echo URL.'assets/js/bootstrap.js'; ?>"></script>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $data['title']; ?></title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="">
    <meta name="author" content="ThemeForces.Com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo IMG;?>favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo IMG;?>apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMG;?>apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo IMG;?>apple-touch-icon-114x114.png">
    
    <!-- animate js -->
    <link rel="stylesheet" href="<?php echo CSS.'animate.min.css';?>"/>
    <script type="text/javascript" src="<?php echo JS.'wow.min.js'; ?>"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo CSS;?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo FONTS;?>font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo CSS;?>style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS;?>responsive.css">

    <script type="text/javascript" src="<?php echo JS;?>modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
  </head>
    

  <body>
    <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="#" style="color:white;">Selamat Datang</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo URL.'index.php/home/';?>">Beranda</a></li>
                        <li><a href="<?php echo URL.'index.php/home/informasi';?>">Informasi</a></li>
                        <?php 
                        if($this->session->userdata('level')=='admin'){ ?>
                          <li><a href="<?php echo URL.'index.php/admin/page';?>">Admin</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo URL.'index.php/home/diagnosa';?>">Diagnosa</a></li> <?php } ?>
                        <li><a href="<?php echo URL.'index.php/home/tentang';?>">Tentang</a></li>
                        <li><a href="<?php echo URL.'index.php/home/saran';?>">Saran</a></li>
                        <?php
                        if($this->session->userdata('login')==1){ ?>
                        <li><a href="<?php echo URL.'index.php/home/logout';?>">Log Out</a></li>
                        <?php } ?>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>