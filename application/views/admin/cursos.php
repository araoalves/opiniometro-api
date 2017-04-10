   <div class="container body">
   
      <div class="main_container">
           <div class="right_col" role="main">
         <div class="row">

           <div class="col-lg-12">
            <h1> Informações importantes:</h1>                
            <h2> No momento de cadastrar os cursos, tenha atenção. Não deixe campus vazios ou qualquer informação pela metade.</h2>                      
         </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastrar Cursos <small> informe os dados corretamente!</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                                               
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <?php if ($this->session->flashdata('cadastro_sucesso') == TRUE): ?>                    
                    <?php 
                        $div = '<div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>'.$this->session->flashdata('cadastro_sucesso').'</div>';                        
                        echo $div;
                    ?>                   
                  <?php endif; ?>

                   <?php if ($this->session->flashdata('cadastro_error') == TRUE): ?>                    
                    <?php 
                        $div = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>'.$this->session->flashdata('cadastro_error').'</div>';                        
                        echo $div;
                    ?>                   
                  <?php endif; ?>

                    <br />
                    <form action="<?= base_url('admin/cursos/cadastrarCursos');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione o vestibular: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="select_vestibular" name="select_vestibular" class="select2_single form-control" tabindex="-1" required="required">
                            <option>-- Selecione o Vestibular --</option>                          

                            <?php foreach ($list_vestibular as $vestibular):?>																		                               
                               <option value="<?= $vestibular->VT06CODVES?>#<?= $vestibular->VT06ANOVES?>"><?= $vestibular->VT06CODVES?>   -   <?= $vestibular->VT06DESCRI?></option>										
						    <?php endforeach; ?>       

                          </select>
                        </div>
                      </div>
                                               
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ano:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">                                        
                                <input type="hidden" id="ano_vest_hidden" name="ano_vest_hidden" >
                                <input type="text" id="ano" name="ano" required="required" class="form-control col-md-7 col-xs-12" disabled="true">                                
                            </div>
                        </div> 

                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Codigo do Vestibular:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">    
                                <input type="hidden" id="cod_vest_hidden" name="cod_vest_hidden" >                                    
                                <input type="text" id="codVestibular" name="codVestibular" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                            </div>
                        </div> 

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione uma das opções: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="select_dados_vestibular" name="select_dados_vestibular" class="select2_single form-control" tabindex="-1" required="required">
                              <option>-- Selecione o Vestibular --</option>                          
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">         
                                <input type="hidden" id="codigo_hidden" name="codigo_hidden" >                                
                                <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cód Curso:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">   
                                <input type="hidden" id="codCurso_hidden" name="codCurso_hidden" >                                                                     
                                <input type="text" id="codCurso" name="codCurso" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Curso:</label>
                            <div class="col-md-6 col-sm-6 col-xs-6">    
                                <input type="hidden" id="curso_hidden" name="curso_hidden" >                                                                                                         
                                <input type="text" id="curso" name="curso" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cód Campus:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">               
                                <input type="hidden" id="codCampus_hidden" name="codCampus_hidden" >                                                                                                                                  
                                <input type="text" id="codCampus" name="codCampus" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Campus:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">     
                                <input type="hidden" id="campus_hidden" name="campus_hidden" >                                                                                                                                                                     
                                <input type="text" id="campus" name="campus" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Turno:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">     
                                <input type="hidden" id="turno_hidden" name="turno_hidden" >                                                                                                                                                                                                        
                                <input type="text" id="turno" name="turno" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                            </div>
                        </div> 

                        

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione O Financiamento: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="select_financiamento_vestibular" name="select_financiamento_vestibular" class="select2_single form-control" tabindex="-1">
                              <option>-- Selecione o Financiamento --</option>  
                              <?php foreach ($list_financiamento as $financiamento):?>																		                               
                               <option value="<?= $financiamento->VT52CODIGO?>"><?= $financiamento->VT52DESFIN?>   -   Porcentagem: <?= $financiamento->VT52PERDSC?></option>										
						    <?php endforeach; ?>                           
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Valor:</label>
                            <div class="col-md-2 col-sm-2 col-xs-6">                                        
                                <input type="text" id="valor" name="valor" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div> 

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione uma Status: <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-6">
                          <select id="select_status_vestibular" name="select_status_vestibular" class="select2_single form-control" tabindex="-1" required="required">
                              <option>S</option>                          
                              <option>N</option>
                          </select>
                        </div>
                      </div>                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Cadastrar</button>                          
						  <button class="btn btn-primary" type="reset">Limpar</button>                         
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

                <div class="modal fade bs-edit-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Editar Curso <h4>ADMINISTRACA</h4></h4>
                        </div><br><br>
                        
                         <form action="<?= base_url('admin/cursos/editarCurso');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">                    
                               
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione o Vestibular: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="select_vestibular_modal" name="select_vestibular_modal" class="select2_single form-control" tabindex="-1" required="required">
                                        <option>-- Selecione o Vestibular --</option>                          
                                        <?php foreach ($list_vestibular as $vestibular):?>																		                               
                                        <option value="<?= $vestibular->VT06CODVES?>#<?= $vestibular->VT06ANOVES?>"><?= $vestibular->VT06CODVES?>   -   <?= $vestibular->VT06DESCRI?></option>										
                                        <?php endforeach; ?>       
                                    </select>                                   
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ano: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                    <input type="hidden" id="ano_vest_hidden_modal" name="ano_vest_hidden_modal">
                                    <input type="hidden" id="cod_vt_53" name="cod_vt_53">
                                    <input type="text" id="ano_vest_modal" name="ano_vest_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>                              
                                    
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Codigo do Vestibular: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                    <input type="hidden" id="cod_vest_hidden_modal" name="cod_vest_hidden_modal">
                                    <input type="text" id="cod_vest_modal" name="cod_vest_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>     

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione uma das opções: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="select_dados_vestibular_modal" name="select_dados_vestibular_modal" class="select2_single form-control" tabindex="-1" required="required">                        
                                        </select>                                   
                                    </div>
                                </div>       

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Código: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                    <input type="hidden" id="codigo_modal_hidden" name="codigo_modal_hidden">
                                    <input type="text" id="codigo_modal" name="codigo_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cód Curso: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                    <input type="hidden" id="codigo_curso_modal_hidden" name="codigo_curso_modal_hidden">
                                    <input type="text" id="codigo_curso_modal" name="codigo_curso_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Curso: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                    <input type="hidden" id="curso_modal_hidden" name="curso_modal_hidden">
                                    <input type="text" id="curso_modal" name="curso_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cód Campus: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                    <input type="hidden" id="cod_campus_modal_hidden" name="cod_campus_modal_hidden">
                                    <input type="text" id="cod_campus_modal" name="cod_campus_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Turno: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                    <input type="hidden" id="turno_modal_hidden" name="turno_modal_hidden">
                                    <input type="text" id="turno_modal" name="turno_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>                                 

                            <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione o Financiamento: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="select_financiamento_modal" name="select_financiamento_modal" class="select2_single form-control" tabindex="-1">
                                            <option>-- Selecione o Financiamento --</option>  
                                            <?php foreach ($list_financiamento as $financiamento):?>																		                               
                                            <option value="<?= $financiamento->VT52CODIGO?>"><?= $financiamento->VT52DESFIN?>   -   Porcentagem: <?= $financiamento->VT52PERDSC?></option>										
                                            <?php endforeach; ?>                           
                                        </select>                                  
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Valor: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                    <input type="hidden" id="valor_modal_hidden" name="valor_modal_hidden">
                                    <input type="text" id="valor_modal" name="valor_modal" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>  

                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <select id="select_status_modal" name="select_status_modal" class="select2_single form-control" tabindex="-1" required="required">
                                            <option>S</option>                          
                                            <option>N</option>                        
                                        </select>                                   
                                    </div>
                                </div> 


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Editar</button>                                                               
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                   
                                    </div>
                                </div>
                         </form>
                        <br>
                      </div>
                    </div>
                  </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Cursos <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">                      
                    </p>

                   <?php if ($this->session->flashdata('exclusao_sucesso') == TRUE): ?>                    
                    <?php 
                        $div = '<div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>'.$this->session->flashdata('exclusao_sucesso').'</div>';                        
                        echo $div;
                    ?>                   
                  <?php endif; ?>

                    <?php if ($this->session->flashdata('exclusao_error') == TRUE): ?>                    
                    <?php 
                        $div = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>'.$this->session->flashdata('exclusao_error').'</div>';                        
                        echo $div;
                    ?>                   
                  <?php endif; ?>

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Cruso</th>
                          <th>Código</th>
                          <th>Turno</th>
                          <th>Ano</th>
                          <th>Cod Vestibular</th>
                          <th>Campus</th>
                          <th>Cod Curso</th>
                          <th>Cod Financiamento</th>
                          <th>Valor</th>
                          <th>Status</th>
                          <th>Editar</th>
                          <th>Remover</th>                           
                        </tr>
                      </thead>
                        <tbody>
                         	<?php foreach ($list_cursos as $cursos):?>								
									<tr>
									  <td><?= $cursos->VT53CODIGO?></td>
                                      <td><?= $cursos->VT03DESCRI?></td>
									  <td><?= $cursos->FK5304CODIGO?></td>
									  <td><?= $cursos->FK5304TURNO?></td>
                                      <td><?= $cursos->FK5304ANOVES?></td>
                                      <td><?= $cursos->FK5304CODVES?></td>
                                      <td><?= $cursos->FK5304CODCAM?></td>
                                      <td><?= $cursos->FK5304CODCRS?></td>
                                      <td><?= $cursos->FK5352CODIGO?></td>
                                      <td><?= $cursos->VT53VALCRS?></td>                                 
                                      <td><?= $cursos->VT53INDATI?></td>
                                      <td>                                                                               
                                            <button id="editar_cursos" type="submit" class="btn btn-warning" data-toggle="modal" data-target=".bs-edit-modal-lg" 
                                            data-ano-curso="<?= $cursos->FK5304ANOVES?>" data-cod-vest="<?= $cursos->FK5304CODVES?>" data-codigo="<?= $cursos->FK5304CODIGO?>"
                                            data-cod-53="<?= $cursos->VT53CODIGO?>" data-cod-curso="<?= $cursos->FK5304CODCRS?>" data-curso="<?= $cursos->VT03DESCRI?>"
                                            data-cod-campus="<?= $cursos->FK5304CODCAM?>" data-turno="<?= $cursos->FK5304TURNO?>" data-valor-curso="<?= $cursos->VT53VALCRS?>"
                                            data-status-curso="<?= $cursos->VT53INDATI?>" data-select-vestibular="<?= $cursos->FK5304CODVES?>#<?= $cursos->FK5304ANOVES?>"
                                            data-select-financiamento="<?= $cursos->FK5352CODIGO?>">Editar</button>                                                                                                                                                                                 
                                      </td>
                                      <td>
                                            <form action="<?= base_url('admin/cursos/removerCurso');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">                                                                    
                                                <input type="hidden" name="id" value="<?= $cursos->VT53CODIGO?>">                                                                                           
                                                <button type="submit" class="btn btn-danger" onClick="return confirm('Deseja Remover?');">Remover</button>                                                                                                   
                                            </form>
                                      </td>
									</tr>															
						<?php endforeach; ?>        
                    </tbody>  

                    </table>
                  </div>
                </div>
              </div>


                                     
            </div>
          </div>
       </div>
</div>

<script>
    
$("#select_vestibular").change(function() { 
    var valores = $('#select_vestibular option:selected').val().split("#");
     $('#codVestibular').val(valores[0]);
     $('#ano').val(valores[1]);   
     $('#ano_vest_hidden').val(valores[1]);   
     $('#cod_vest_hidden').val(valores[0]);   
     

         $.ajax({
            type: 'post',
            url: '<?= base_url("admin/cursos/recuperarDadosVestibular"); ?>',
            data: {                
                'codVestibular': valores[0],
                'ano':  valores[1]
            },
            success: function(data) {
            	if ((data.errors)){
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {                    
                        var options = '<option value="">-- Escolha Uma das Opções --</option>'; 
                        var retorno = JSON.parse(data);
                                                
                        retorno.forEach(function(valor,chave){
                            options += '<option value="' + valor.VT04CODIGO + '#'+valor.VT03DESCRI+'#'+valor.VT05DESCAM+'#'+valor.VT04TURNO+'#'+valor.FK0403CODCRS+'#'+valor.FK0405CODCAM+'">Curso: '+valor.VT03DESCRI +' -  Campus: ' +valor.VT05DESCAM+' - Turno: '+valor.VT04TURNO + '</option>';
                        });  
                        $('#select_dados_vestibular').html(options).show();
                        $('.carregando').hide();                                           
                    }                                        
            },

        });
});

$("#select_dados_vestibular").change(function() { 
    var valores = $('#select_dados_vestibular option:selected').val().split("#");
    $('#codigo').val(valores[0]);
    $('#codigo_hidden').val(valores[0]);
    $('#curso').val(valores[1]); 
    $('#curso_hidden').val(valores[1]); 
    $('#campus').val(valores[2]); 
    $('#campus_hidden').val(valores[2]); 
    $('#turno').val(valores[3]); 
    $('#turno_hidden').val(valores[3]); 
    $('#codCurso').val(valores[4]); 
    $('#codCurso_hidden').val(valores[4]);
    $('#codCampus').val(valores[5]);
    $('#codCampus_hidden').val(valores[5]);
}); 

$("#select_dados_vestibular_modal").change(function() { 
    var valores = $('#select_dados_vestibular_modal option:selected').val().split("#");
    $('#codigo_modal_hidden').val(valores[0]);
    $('#codigo_modal').val(valores[0]);
    $('#codigo_curso_modal_hidden').val(valores[4]); 
    $('#codigo_curso_modal').val(valores[4]);
    $('#curso_modal_hidden').val(valores[1]); 
    $('#curso_modal').val(valores[1]); 
    $('#cod_campus_modal_hidden').val(valores[5]); 
    $('#cod_campus_modal').val(valores[5]);
    $('#turno_modal_hidden').val(valores[3]); 
    $('#turno_modal').val(valores[3]); 
}); 



$("#select_vestibular_modal").change(function() { 
    var valores = $('#select_vestibular_modal option:selected').val().split("#");
     $('#ano_vest_modal').val(valores[1]);   
     $('#ano_vest_hidden_modal').val(valores[1]);   
     $('#cod_vest_hidden_modal').val(valores[0]);   
     $('#cod_vest_modal').val(valores[0]);
     
         $.ajax({
            type: 'post',
            url: '<?= base_url("admin/cursos/recuperarDadosVestibular"); ?>',
            data: {                
                'codVestibular': valores[0],
                'ano':  valores[1]
            },
            success: function(data) {
            	if ((data.errors)){
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {                    
                        var options = '<option value="">-- Escolha Uma das Opções --</option>'; 
                        var retorno = JSON.parse(data);
                                                
                        retorno.forEach(function(valor,chave){
                            options += '<option value="' + valor.VT04CODIGO + '#'+valor.VT03DESCRI+'#'+valor.VT05DESCAM+'#'+valor.VT04TURNO+'#'+valor.FK0403CODCRS+'#'+valor.FK0405CODCAM+'">Curso: '+valor.VT03DESCRI +' -  Campus: ' +valor.VT05DESCAM+' - Turno: '+valor.VT04TURNO + '</option>';
                        });  
                        $('#select_dados_vestibular_modal').html(options).show();
                        $('.carregando').hide();                                           
                    }                                        
            },

        });
});


$(document).on('click', '#editar_cursos', function() {
    $('#cod_vt_53').val($(this).attr("data-cod-53"));
    $('#ano_vest_hidden_modal').val($(this).attr("data-ano-curso"));
    $('#ano_vest_modal').val($(this).attr("data-ano-curso"));
    $('#cod_vest_hidden_modal').val($(this).attr("data-cod-vest"));
    $('#cod_vest_modal').val($(this).attr("data-cod-vest"));
    $('#codigo_modal_hidden').val($(this).attr("data-codigo"));
    $('#codigo_modal').val($(this).attr("data-codigo"));
    $('#codigo_curso_modal_hidden').val($(this).attr("data-cod-curso"));
    $('#codigo_curso_modal').val($(this).attr("data-cod-curso"));
    $('#curso_modal_hidden').val($(this).attr("data-curso"));
    $('#curso_modal').val($(this).attr("data-curso"));
    $('#cod_campus_modal_hidden').val($(this).attr("data-cod-campus"));
    $('#cod_campus_modal').val($(this).attr("data-cod-campus"));
    $('#turno_modal_hidden').val($(this).attr("data-turno"));
    $('#turno_modal').val($(this).attr("data-turno"));
    $('#valor_modal_hidden').val($(this).attr("data-valor-curso"));
    $('#valor_modal').val($(this).attr("data-valor-curso"));
    $('#select_status_modal').val($(this).attr("data-status-curso"));
    $('#select_financiamento_modal').val($(this).attr("data-select-financiamento"));    
    
})


</script>