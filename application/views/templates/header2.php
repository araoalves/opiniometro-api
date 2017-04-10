<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Universidade Ceuma, Vestibular Ceuma, Inscrição Ceuma, Vestibular Agendado Ceuma" />
    <meta name="Universidade Ceuma" content="Universidade Ceuma" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="img/favicon/favicon.jpg">
        
    <title>Vestibular CEUMA 2017</title>
   
    <!--  Estilo Bootstrap  -->
    <link href="<?= base_url('resources/css/bootstrap/bootstrap.css');?>" rel="stylesheet" />
      <!--  CSS Geral -->
    <link href="<?= base_url('resources/css/style.css');?>" rel="stylesheet" />
    <!--  Fonte Awesome -->
    <link href="<?= base_url('resources/css/font-awesome.min.css');?>" rel="stylesheet" />
   
    
    <!--  Animation Style 
    <link href="css/animate.css" rel="stylesheet" />-->
    <!--  Pretty Photo Style 
    <link href="css/prettyPhoto.css" rel="stylesheet" />-->
    
    
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
     <!--  Jquery Core Script -->
    <script src="<?= base_url('resources/js/jquery-1.10.2.js');?>"></script>
    
    
</head>
<body>
    
    <!--Inicio do menu principal -->
    <div class="navbar navbar-default navbar-fixed-top move-me ">  
        <div class="container"> <!-- Inicio container 01 -->
            <div class="navbar-header"> <!-- inicio navbar header -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Logo do menu principal -->
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('resources/img/logo.png'); ?>" class="navbar-brand-logo" alt="" style="margin-top:-5px;"/>
                </a>
            </div> <!-- Final navbar header -->
            
            <!-- Inicio navbar-collapse -->
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">

                    <li class="border-menu">
                        <a href="<?= base_url('home'); ?>">Home 

                        </a>

                    </li>
                   

                    <li class="border-menu" >
                        <a href="<?= base_url('cursosValores'); ?>">Cursos e Valores
                        </a>

                    </li>

                   

                    
					
                    <li class="border-menu" >
                        <a href="#">Financiamento
                        </a>

                    </li>
                     <li >
                        <li class="dropdown inscreva-menu1  ">
						  <a href="#" class="dropdown-toggle inscreva-se1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> + Vestibular<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="acompanhamentoCandidato.php" class="dropdownmenu">Acompanhamento</a></li>
                              <li><a href="#" class="dropdownmenu">Documentos</a></li>
                              <li><a href="<?= base_url('editaleManual');?>" class="dropdownmenu">Edital e Manual</a></li>
							<li><a href="#" class="dropdownmenu">Calendário</a></li>
							<li><a href="#" class="dropdownmenu">Matrícula</a></li>
                            <li><a href="resultadosVestibular.php" class="dropdownmenu">Resultados</a></li>
							<li><a href="#" class="dropdownmenu">Contato</a></li>
						  </ul>
						</li>
                    </li>
                   
                    <li class="inscreva-menu">
                        <a class="inscreva-se"  href="<?= base_url('inscricao'); ?>"> Inscreva-se</a>
                    </li>
                       
                </ul>
            </div><!-- Inicio navbar-collapse -->
        </div> <!-- Final container 01 -->
    </div> <!-- Final do menu principal  -->
    
   