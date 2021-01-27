<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!-- Custom fonts for this template-->
    <link href="<?= base_url()?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
    
    <script src="<?= base_url()?>assets/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url()?>assets/jquery/popper.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style3.css" rel="stylesheet">
    
    <script src="<?= base_url()?>assets/jquery/sweetalert2@9.js"></script>
    
    <script src="<?= base_url()?>assets/js/script.js"></script>
    
    <link rel="icon" href="<?= base_url()?>assets/img/logo.png" type="image/icon type">
    <title><?= $title?></title>
</head>

<body style="background-color: #265D5A">
<!-- <body> -->
    
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="list-group list-group-flush mt-3">
            <div class="col-12 mb-3 text-center">
                <img src="<?= base_url()?>assets/img/logo.png" width="75" class="img-fluid img-shadow">
            </div>
            <a href="<?= base_url()?>peserta/konfirm" class="list-group-item list-group-item-action <?php if($title == 'Konfirmasi Peserta'){echo 'bg-primary text-light';}else{echo 'bg-light text-dark';}?>"><i class="fa fa-user-check mr-3"></i>Konfirmasi Peserta</a>
            <a href="<?= base_url()?>peserta" class="list-group-item list-group-item-action <?php if($title == 'List Peserta'){echo 'bg-primary text-light';}else{echo 'bg-light text-dark';}?>"><i class="fa fa-users mr-3"></i>List Peserta</a>
            <a href="<?= base_url()?>auth/logout" class="list-group-item list-group-item-action" onclick="return confirm('Yakin akan keluar?')"><i class="fa fa-sign-out-alt mr-3"></i>Logout</a>
        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top navbar-ku">
            <div class="container">
                <a id="sidebarCollapse" class="btn btn-sm"><img src="<?= base_url()?>assets/img/logo.png" width="25"><span class="text-light ml-2"><b><?= $title?></b></span></span></a>
            </div>
        </nav>
