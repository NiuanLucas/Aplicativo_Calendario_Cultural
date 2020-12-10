<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Eventos Rio</title>

    <link rel="stylesheet" href="/CalendarioCultural/css/bootstrap.css" />
    <link rel="stylesheet" href="/CalendarioCultural/css/bootstrap-grid.css" />
    <link rel="stylesheet" href="/CalendarioCultural/css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="/CalendarioCultural/css/font-awesome.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/CalendarioCultural/css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://use.fontawesome.com/8c6c182f35.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>


    <div class="wrapper" id="menu">

        <!-- Sidebar  -->
        <nav id="sidebar" class="bg-rio" style="z-index: 2000 !important; overflow-x: hidden !important; overflow-y: hidden !important; " >

             <!--<div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>-->

            
                <?php if(isset($_SESSION['usuario'])): ?>
                <div class="sidebar-header bg-warning" >
                    <h3 class="mt-2 text-purple"> <i class="fa fa-user-circle text-purple"></i>&nbsp; Bem-Vindo, <?=$_SESSION['usuario']->nome;?> </h3>
                <?php else: ?>
                <div class="sidebar-header bg-purple" >
                    <h3 class="mt-2"> <i class="fa fa-map-signs text-warning"></i>&nbsp; Calendario de Eventos Rio </h3>
                <?php endif; ?>
            </div>

            <ul class="list-unstyled components ml-2">

                <li>
                    <a href="<?=base_url();?>"> <i class="fa fa-home fa-lg"></i>&nbsp; Home</a>
                </li>
                
                
                <?php if(isset($_SESSION['usuario'])): ?>
                <li>
                    <a href="<?= base_url('eventos/formulario')?>"><i class="fas fa-check-square"></i> &nbsp; Inserir Novo Evento</a>
                </li>
                
                <li>
                    <a href="<?= base_url('sair')?>"><i class="fas fa-sign-out-alt"></i> &nbsp; Sair</a>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?= base_url('login')?>"> <i class="fa fa-user-circle fa-lg"></i>&nbsp; Login</a>
                </li>

                <li>
                    <a href="<?=base_url('cadastro');?>"> <i class="fa fa-arrow-right fa-lg"></i>&nbsp; Cadastrar</a>
                </li>
                <?php endif; ?>

                
<!--
                <li>
                    <a href=""> <i class="fa fa-heart fa-lg"></i>&nbsp; Meu Perfil</a>
                </li>

                <li>
                    <a href="<?=base_url('regioes');?>"> <i class="fa fa-map fa-lg"></i>&nbsp; Encontrar Eventos por Regiões</a>
                </li>
-->
                
                <li>
                    <a href="<?=base_url('cidades');?>"> <i class="fa fa-compass fa-lg fa-spin"></i>&nbsp; Encontrar Eventos? </a>
                </li>


            </ul>
<!--
            <ul class="list-unstyled CTAs">
                <li>

  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text bg-warning" id="basic-addon1"> <i class="fa fa-search text-purple"></i></span>
      </div>
      <input type="text" class="form-control" placeholder="Vamos Lá" aria-describedby="basic-addon1">
    </div>
    <button style="margin: 0 auto;" class="btn btn-sm bg-warning text-purple font-weight-bold mt-2" type="button">Pesquisar</button>
  </form>
                </li>
            </ul>
-->
        </nav>

        <nav class="navbar navbar-expand-lg bg-warning fixed-top" style="z-index: 10 !important;">
                <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn text-white bg-purple">
                <i class="fas fa-align-justify"></i>
                </button>

                <h2 class="text-purple" style="margin: 0 auto; margin-left: 7.5%;"> <i class="fa fa-calendar"></i> Eventos Rio </h2>

                </div>
            </nav>