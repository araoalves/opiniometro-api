<!DOCTYPE html>
<html lang="pt">

<head>
   <title>Vestibular CEUMA 2017</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
   <meta name="description" content="Universidade Ceuma, Vestibular Ceuma, Inscrição Ceuma, Vestibular Agendado Ceuma" />
   <meta name="Universidade Ceuma" content="Universidade Ceuma" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <meta http-equiv="content-language" content="pt-br"/>
   <meta name="keywords" content="Universidade Ceuma, Vestibular Ceuma, Inscriçoes Ceuma, Cursos e Valores, Ceuma Universidade, Vestibular"/>
   <meta name="robots" content="index,follow"/>
   <meta name="theme-color" content="#18BC9C"/>
   <!--Meta Tags do Open Graph -->
    <meta property="og:title" content="Vestibular Ceuma - Melhores cursos e valores"/>
    <meta property="og:site_name" content="Ceuma"/>
    <meta property="og:url" content="www.vestibularceuma.br"/>
    <meta property="og:description" content="Os melhores cursos do Maranhão, estude na melhor Universidade"/>
    <meta property="og:image" content="<?= base_url('resources/img/cursos_destaque/enfermagem-min.png');?>"/>
    <meta property="og:image:type" content="cursos_destaque/enfermagem-min.png"/>
    <meta property="og:image:width" content="250"/>
    <meta property="og:image:height" content="250"/>
   
   <link rel="shortcut icon" href="<?= base_url('resources/img/favicon/logo.png');?>" />
     <!-- Estilo Bootstrap e Animation Style -->
   <link href="<?= base_url('resources/css/bootstrap/bootstrap.css');?>" rel="stylesheet" />
   <link rel="stylesheet" href="<?= base_url('resources/css/animate.min.css');?>" />
   <!-- CSS Geral -->
   <link href="<?= base_url('resources/css/style.css');?>" rel="stylesheet" />
   <!-- Fonte Awesome -->
   <link href="<?= base_url('resources/css/font-awesome.min.css');?>" rel="stylesheet" />
   
    <!-- Jquery Core Script -->
    <script src="<?= base_url('resources/js/jquery-1.10.2.js');?>"></script>
  
</head>

<body>
   <!--Inicio do menu principal -->
   <div class="navbar navbar-default navbar-fixed-top move-me">
      <div class="container">
         <!-- Inicio container 01 -->
         <div class="navbar-header">
            <!-- inicio navbar header -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <!-- Logo do menu principal -->
            <a class="navbar-brand" href="#">
                    <img src="<?= base_url('resources/img/logo.png'); ?>" class="navbar-brand-logo" alt="" style="margin-top:-5px;"/>
                </a>
         </div>
         <!-- Final navbar header -->
         <!-- Inicio navbar-collapse -->
         <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right">
               <li class="border-menu">
                  <a href="<?= base_url('home'); ?>">Home</a>
               </li>
               <li class="border-menu">
                  <a href="<?= base_url('cursosValores');?>">Cursos e Valores</a>
               </li>
               <li class="border-menu">
                  <a href="<?= base_url('financiamentoVestibular'); ?>">Financiamento</a>
               </li>
               <li>
                  <li class="dropdown inscreva-menu1  ">
                     <a href="#" class="dropdown-toggle inscreva-se1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> + Vestibular<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li>
                           <a href="<?= base_url('acompanhamento'); ?>" class="dropdownmenu">Acompanhamento</a>
                        </li>
                        
                        <li>
                           <a href="<?= base_url('editaleManual');?>" class="dropdownmenu">Edital e Manual</a>
                        </li>
                        <li>
                           <a href="<?= base_url('calendarioVestibular');?>" class="dropdownmenu">Calendário</a>
                        </li>
                        
                        <li>
                           <a href="<?= base_url('resultadosVestibular');?>" class="dropdownmenu">Resultados</a>
                        </li>
                        <li>
                           <a href="#" class="dropdownmenu">Fale conosco</a>
                        </li>
                     </ul>
                  </li>
               </li>
               <li class="inscreva-menu">
                  <a class="inscreva-se" href="<?= base_url('inscricao'); ?>"> Inscreva-se</a>
               </li>
            </ul>
         </div>
         <!-- Inicio navbar-collapse -->
      </div>
      <!-- Final container 01 -->
   </div>
   <!-- Final do menu principal -->