<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>COMIDABARATA.COM.BR &mdash; Anuncie agora é grátis</title>

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url(); ?>assets-adm/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= base_url(); ?>assets-adm/css/style.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets-adm/css/style-responsive.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets-adm/css/style-comidabarata.css" rel="stylesheet">

        <script src="<?= base_url(); ?>assets-adm/js/chart-master/Chart.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="<?= base_url(); ?>" class="logo"><b>COMIDABARATA<span>.com.br</span></b></a>
            <!--logo end-->

            <div class="btn-group pull-right top-menu" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="" href="<?= base_url(); ?>user/UserUpdate">Perfil</a></li>
                        <li><a class="" href="<?= base_url(); ?>User/logout">Sair</a></li>
                    </ul>
                </div>
            </div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        </header>

