<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $titulo?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('resources/admin/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('resources/admin/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- Adicionando tabela dinamica -->
    <link href="<?= base_url('resources/admin/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('resources/admin/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('resources/admin/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('resources/admin/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('resources/admin/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('resources/admin/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?= base_url('resources/admin/normalize-css/normalize.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('resources/admin/ion.rangeSlider/css/ion.rangeSlider.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('resources/admin/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css'); ?>" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="<?= base_url('resources/admin/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'); ?>" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?= base_url('resources/admin/jquery/dist/jquery.min.js'); ?>"></script>

    <!-- Barra de progresso 
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">-->
    <!-- iCheck 
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">-->
	
    <!-- bootstrap-progressbar 
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">-->
    <!-- JQVMap
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/> -->
    <!-- bootstrap-daterangepicker 
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">-->
     <!-- Dropzone.js 
    <link href="vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">-->
    <!-- Custom Theme Style -->
    <link href="<?= base_url('resources/admin/build/css/custom.min.css'); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url('admin/home/homeAdmin');?>" class="site_title"> <span>Opiniômetro</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url('resources/admin/images/logo_admin.jpg'); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Seja Bem Vindo,</span>
                <h2><?= $this->session->usuario_nome; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                <?php if ($this->session->permissao == "2"): ?>   
                    <li><a><i class="fa fa-edit"></i> Administrativo <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">                    
                            <li><a href="<?= base_url('admin/usuario');?>">Cadastro de Usuários</a></li>                                                    
                            <li><a href="<?= base_url('admin/setores');?>">Cadastro de Setores</a></li>
                        </ul>
                      </li>
                    <li><a><i class="fa fa-camera-retro"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?= base_url('admin/opiniaoUsuario');?>">Opiniões / Usuário</a></li>
                        <li><a href="<?= base_url('admin/opiniaoEmpresa');?>">Opiniões / Empresa</a></li>
                      </ul>
                    </li>
                <?php endif; ?>

                 <?php if ($this->session->permissao == "1"): ?>   
                    <li><a><i class="fa fa-edit"></i> Administrativo <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">                    
                            <li><a href="<?= base_url('admin/usuario');?>">Cadastro de Usuários</a></li>   
                            <li><a href="<?= base_url('admin/empresa');?>">Cadastro de Empresas</a></li>
                            <li><a href="<?= base_url('admin/permissao');?>">Cadastro de Permissões</a></li> 
                            <li><a href="<?= base_url('admin/setores');?>">Cadastro de Setores</a></li>                                                                                                
                        </ul>
                      </li>
                      <li><a><i class="fa fa-camera-retro"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?= base_url('admin/opiniaoUsuario');?>">Opiniões / Usuário</a></li>
                        <li><a href="<?= base_url('admin/opiniaoEmpresa');?>">Opiniões / Empresa</a></li>
                      </ul>
                    </li>
                <?php endif; ?>

                  <!--<li><a><i class="fa fa-file-text-o"></i> Edital e Manual <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cadastrarEdital.php">Cadastrar edital</a></li>
                      <li><a href="excluirEdital.php">Excluir edital</a></li>
                        <li><a href="cadastrarManual.php">Cadastrar Manual</a></li>
                      <li><a href="excluirManual.php">Excluir Manual</a></li>
                        <li><a href="cadastrarAditivo.php">Cadastrar Aditivo</a></li>
                      <li><a href="excluirAditivo.php">Excluir Aditivo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Calendário <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cadastrarCalendario.php">Cadastrar calendário</a></li>
                      <li><a href="alterarCalendario.php">Alterar calendário</a></li>
                      <li><a href="excluirCalendario.php">Excluir calendário</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Resultados <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="gerarResultadoVestibular.php">Incluir resultado</a></li>
                      <li><a href="excluirResultadoVestibular.php">Excluir resultado</a></li>
                    </ul>
                  </li>-->
                </ul>
              </div>
               

            </div>
           
          </div>
        </div>
          
           <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('resources/admin/images/logo_admin.jpg'); ?>" alt="">Cód: <?= $this->session->usuario_codigo; ?>, <?= $this->session->usuario_nome; ?> / Empresa - <?= $this->session->empresa_descricao; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!--<li><a href="javascript:;">Help</a></li>-->
                    <li><a href="<?= base_url('admin/login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->