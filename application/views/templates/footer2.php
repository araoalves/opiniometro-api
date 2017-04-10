<!-- Inicio do Footer -->
    <!-- Inicio do Footer -->
    <div id="footser-end">
        <div class="container-fluid"> <!-- Inicio Container Footer -->
            <div class="row"> <!-- Inicio row Footer -->
                   <div id="infoFooter">
                       
                       <div class="espaco-footer img-campi col-lg-1 col-lg-offset-1 col-md-1" >
                            <img class="footer-img"  src="<?= base_url('resources/img/footer/ceuma2.png');?>" >
                       </div>
                       
                 <div class="espaco-footer col-lg-2 col-md-3 col-md-offset-1 col-sm-3 ">
                        
                        <h4 class="font-footer">  Universidade Ceuma </h4>
                     
                     
                     <p> Visite nosso site:</p>
                     <p class="font-footer-espaco"><a href="#">www.ceuma.br</a> </p>
                     
                 </div>
                
                
               
                

                <div class="espaco-footer col-lg-2 col-md-3 col-sm-3">
                    <h4 class="font-footer"> Grupo Ceuma</h4>
                    <p class="icones"><a href="#">Ceuma</a></p>
                    <p class="icones"><a href="#">Unieuro</a></p>
                    <p class="icones"><a href="#">Famaz</a></p>
                    <p class="icones"><a href="#"> Ceupi</a></p>
                </div>
                
                <div class="espaco-footer col-lg-2 col-md-3 col-sm-3">
                    <h4 class="font-footer"> Links</h4>
                    <p class="icones"><a href="#">Inscrição</a></p>
                    <p class="icones"><a href="#">Matrícula</a></p>
                    <p class="icones"><a href="#">Acompanhamento</a></p>
                    <p class="icones"><a href="#"> Edital/Manual</a></p>
                    <p class="icones"><a href="#"> Resultados</a></p>
                    <p class="icones"><a href="#"> Cursos e Valores</a></p>
                </div>
        
                
                
                <div class="espaco-footer  icones col-lg-2 col-md-2 col-sm-3">
                    <h4 class="font-footer "> Fale Conosco</h4>
                    <a href="#"><i class="fa fa-phone-square fa-3x" aria-hidden="true"></i></a>
                    <p>Dúvida, crítica, sugestão ou elogio?</p>
                    <p class="font-footer-espaco"><a href="www.grupoceuma.com.br"> Entre em contato aqui!</a></p>
                </div>
                    </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 redes-sociais text-center" >
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a> 
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i> </a>
                        <a href="#"><i class="fa fa fa-youtube-square fa-2x"></i> </a>
                 <p> © 2017 Universidade Ceuma. Todos os direitos reservados </p>   
                </div>
           
            </div> <!-- Final row Footer -->
        </div> <!-- Final Container Footer -->
    </div><!-- Final do Footer -->
    
    <script>
            $('#enviaCpf').click(function(){
                var cpf = $('#cCpf').val();

               if(cpf.length==14){
                $.ajax({
                   type: "POST",
                    url: "<?= base_url('inscricao/retornaPessoaFisicaPeloCPF/');?>",
                    beforeSend: function(xhr){
                       $('#enviaCpf').html('Carregando...');
                       $('#erro').slideUp(100);
                    },
                    data:{cpf: cpf},
                    success: function(data){
                       if(data!== '0') {
                            $('#erro').slideUp(150);
                            $('#formInscricao').html(data);
                            $('#enviaCpf').slideUp(150);
                            $('#formInscricao').delay(150).slideDown(500);
                            $('#preEtapas').attr('action', '<?= base_url('inscricao/dadosPessoais/'); ?>');
                            $('#cCpf').attr('disabled', 'true');
                       }else {
                           $('#enviaCpf').attr("value","Enviar");
                           $('#erro').delay(320).slideDown(500);
                       }
                    }
                });
               }
            });

            $(document).ready(function(){
                $('.previous').fadeIn(400).attr('onclick', 'window.open("<?= base_url("home"); ?>","_self");');
                $('.previous').parent().removeAttr('aria-disabled').removeAttr('onclick').removeClass('disabled');
            });

            function retornaCampusPeloVestibular(anoves,codves,tipo){
                $.ajax({
                   type: "POST",
                    url: "<?= base_url('inscricao/retornaCampusPeloVestibular/');?>",
                    beforeSend: function(xhr){
                       $('#carregando').slideDown(100);
                       $('.selectDados').slideUp(200);
                    },
                    data:{anoves:anoves,codves:codves},
                    success: function(data){
                       if(data!== '0') {
                           //$('.caixa-vestibular').toggle(700);
                           //$(element).parent().delay(50).fadeIn(500);
                           //$(element).prop('onclick',null).off('click');
                           $('#carregando').slideUp(400);
                           $('#erro').slideUp(400);
                           $('#selectCampus').html(data);
                           $('#selectCurso').html("<option>Selecione primeiramente o campus</option>");
                           $('#selectTurno').html('<option>Selecione primeiramente o campus</option>');
                           $('.selectDados').delay(800).slideDown(700);
                           $('.previous').removeAttr('onclick').attr('onclick', 'retornaVestibulares();');
                           if(tipo==1){
                               $('.disp').fadeIn(500);
                           }else{
                               $('.disp').fadeOut(500);
                           }
                       }else{
                           $('#erro').slideDown(500);
                       }
                    }
                });
            }

            function retornaVestibulares(){
                    $('.caixa-vestibular').slideUp(500).delay(500).slideDown(500);
                    $('.selectDados').slideUp(500);
                    $('.next').fadeOut(400);
                    $('.previous').attr('onclick', 'window.open("<?= base_url("home"); ?>","_self");').parent().removeAttr('aria-disabled').removeAttr('onclick').removeClass('disabled');
            }
            

            /* Pega os cursos de acordo com o campus, ano e código do vestibular */
            function retornaCursosPeloCampus(){
                var campus = $('#selectCampus').val();
                //alert(campus);
                var urlWeb = '<?= base_url("inscricao/retornaCursoPeloCampus/"); ?>';
                $.ajax({
                    type: "POST",
                    url: urlWeb,
                    beforeSend: function(xhr){
                        $('#selectCurso').html('<option>Carregando...</option>');  
                    },
                    data:{value:campus},
                    success: function(data){
                        if(data!==null){
                            $('#selectCurso').html(data);
                            $('#selectTurno').html('<option selected="true">Selecione primeiramente o curso</option>');
                        }else if(data===null){
                            window.location.href="<?= base_url('home'); ?>";
                        }
                    }
                });
             }

             /* Pega o turno de acordo com o campus, curso, ano e código do vestibular */
             function retornaTurnoPeloCursoCampus(){
                 var curso = $('#selectCurso').val();
                 //alert(curso);
                 var urlWeb = '<?= base_url("inscricao/retornaTurnoPeloCursoCampus/"); ?>';
                 $.ajax({
                     type: "POST",
                     url: urlWeb,
                     beforeSend: function(xhr){
                         $('#selectTurno').html('<option>Carregando...</option>');
                     },
                     data:{value: curso},
                     success: function(data){
                         if(data!==null){
                             $('#selectTurno').html(data);
                             $('.next').fadeIn(500);
                         }else if(data===null){
                             window.location.href="<?= base_url('home'); ?>";
                         }
                     }
                 });
             }

             function habilitaPróximo(){
                 $('.next').fadeIn(500);
             }

             function retornaCidadePeloEstado(){
                 var estado = $('#selectEstado').val();
                 var urlWeb = '<?= base_url("inscricao/retornaCidadePeloEstado/"); ?>';
                 $.ajax({
                     type: "POST",
                     url: urlWeb,
                     beforeSend: function(xhr){
                         $('#selectCidade').html('<option>Carregando...</option>');
                     },
                     data:{estado: estado},
                     success: function(data){
                         if(data!==null){
                             $('#selectCidade').html(data);
                         }else if(data===null){
                             window.location.href="<?= base_url('home'); ?>";
                         }
                     }
                 });
             }
       </script>

    
    <!--  Core Bootstrap Script -->
    <script src="<?= base_url('resources/js/bootstrap.js');?>"></script>
     <!--  WOW Script -->
    <script src="<?= base_url('resources/js/wow.min.js');?>"></script>
    <!--  Scrolling Script -->
    <script src="<?= base_url('resources/js/jquery.easing.min.js');?>"></script>
    <!--  PrettyPhoto Script -->
    <script src="<?= base_url('resources/js/jquery.prettyPhoto.js');?>"></script>
    <!--  Custom Scripts -->
    <script src="<?= base_url('resources/js/custom.js');?>"></script>
     <!-- Step inscrição -->
    <script src="<?= base_url('resources/js/steps/jquery.steps.js');?>"></script>
    <!-- Efeito Cursos -->
    <script src="<?= base_url('resources/js/jquery.sliphover.min.js');?>"></script>
    
    <!-- Mask Jquery -->
    <script src="<?= base_url('resources/js/MaskForm/jquery.inputmask.bundle.js');?>"></script>
    <script src="<?= base_url('resources/js/mask-inscricao.js');?>"></script>
        <script>
            /* Pega as cidades */
            $('#selectEstado').change(function(){
                var selectEstado = $('#selectEstado').val();
                var urlWeb = '<?= base_url("dadosPessoais/retornaCidadesPeloEstado/"); ?>';
                $.ajax({
                    type: "POST",
                    url: urlWeb,
                    beforeSend: function(xhr){
                        $('#selectCidade').html('<option>Carregando...</option>');  
                    },
                    data:{estado: selectEstado},
                    success: function(data){
                        if(data!==null){
                            $('#selectCidade').html(data);
                        }else if(data===null){
                            window.location.href="<?= base_url('home'); ?>";
                        }
                    }
                });
             });
             
             /* Pega os cursos de acordo com o campus, ano e código do vestibular */
             $('#selectCampus').change(function(){
                var selectCampus = $('#selectCampus').val();
                var codves = $('#inputCodves').val();
                var anoves = $('#inputAnoves').val();
                var urlWeb = '<?= base_url("dadosPessoais/retornaCursoPeloCampusCodvesAnoves/"); ?>';
                $.ajax({
                    type: "POST",
                    url: urlWeb,
                    beforeSend: function(xhr){
                        $('#selectCurso').html('<option>Carregando...</option>');  
                    },
                    data:{campus: selectCampus, codves: codves, anoves: anoves},
                    success: function(data){
                        if(data!==null){
                            $('#selectCurso').html(data);
                            $('#selectTurno').html('<option selected="true">Selecione primeiramente o curso</option>');
                        }else if(data===null){
                            window.location.href="<?= base_url('home'); ?>";
                        }
                    }
                });
             });

             /* Pega o turno de acordo com o campus, curso, ano e código do vestibular */
             $('#selectCurso').change(function(){
                 var selectCampus = $('#selectCampus').val();
                 var selectCurso = $('#selectCurso').val();
                 var codves = $('#inputCodves').val();
                 var anoves = $('#inputAnoves').val();
                 var urlWeb = '<?= base_url("dadosPessoais/retornaTurnoPeloCampusCursoCodvesAnoves/"); ?>';
                 $.ajax({
                     type: "POST",
                     url: urlWeb,
                     beforeSend: function(xhr){
                         $('#selectTurno').html('<option>Carregando...</option>');
                     },
                     data:{campus: selectCampus, curso: selectCurso, codves: codves, anoves: anoves},
                     success: function(data){
                         if(data!==null){
                             $('#selectTurno').html(data);
                         }else if(data===null){
                             window.location.href="<?= base_url('home'); ?>";
                         }
                     }
                 })
             });
        </script>
</body>
</html>
