   <div class="container body">
      <div class="main_container">
           <div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastrar Empresas <small> informe os dados corretamente!</small></h2>
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

                   <?php if ($this->session->flashdata('error') == TRUE): ?>                    
                    <?php 
                        $div = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>'.$this->session->flashdata('error').'</div>';                        
                        echo $div;
                    ?>                   
                  <?php endif; ?>

                    <br />
                    <form action="<?= base_url('admin/setores/cadastrarSetor');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite o CNPJ: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>    

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite a Razão Social: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite o nome Fantasia: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite a inscrião Municipal: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite a inscrição Estadual: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite o Endereço: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite o Telefone: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite o Email: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descricao_setor" id="descricao_setor" required="required" class="form-control col-md-7 col-xs-12">
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
                          <h4 class="modal-title" id="myModalLabel">Editar Permissão</h4>
                        </div><br><br>
                        
                         <form action="<?= base_url('admin/setores/editarSetor');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">                    
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" id="id_setor_modal_hidden" name="id_setor_modal_hidden">
                                    <input type="text" id="id_setor_modal" name="id_setor_modal" required="required" class="form-control col-md-7 col-xs-12" disabled="true">                                    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Digite a Descricão do Setor: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">                                    
                                    <input type="text" id="descricao_setor_modal" name="descricao_setor_modal" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>    

                                <?php if ($this->session->permissao == "2"): ?>  
                                      <input type="hidden" id="select_cod_empresa_modal" name="select_cod_empresa_modal" value="<?= $this->session->empresa; ?>">
                                <?php endif; ?>      

                                <?php if ($this->session->permissao == "1"): ?>
                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione uma das opções: <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="select_cod_empresa_modal" name="select_cod_empresa_modal" class="select2_single form-control" tabindex="-1" required="required">                                   

                                            <?php foreach ($listEmpresas as $empresa):?>																		                               
                                                    <option value="<?= $empresa->empresa_id?>"><?= $empresa->empresa_id?>   -   <?= $empresa->empresa_razao_social?></option>										
                                            <?php endforeach; ?>  

                                        </select>
                                      </div>
                                    </div>
                              <?php endif; ?>                                                                                          

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
                    <h2>Lista de Empresas <small></small></h2>
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
                          <th>CNPJ</th>
                          <th>Razão Social</th>
                          <th>Nome Fantazia</th>
                          <th>Inscrição Municipal</th>
                          <th>Inscrição Estadual</th>
                          <th>Endereço</th>
                          <th>Telefone</th>
                          <th>E-mail</th>
                          <th>Status</th>
                          <th>Editar</th>
                          <th>Remover</th>
                        </tr>
                      </thead>
                        <tbody>
                         	<?php foreach ($listEmpresas as $empresa):?>								
									<tr>
									  <td><?= $empresa->empresa_id?></td>
									  <td><?= $empresa->empresa_cnpj?></td>
                                      <td><?= $empresa->empresa_razao_social?></td>
                                      <td><?= $empresa->empresa_nome_fantasia?></td>
                                      <td><?= $empresa->empresa_inscricao_municipal?></td>
                                      <td><?= $empresa->empresa_inscricao_estadual?></td>
                                      <td><?= $empresa->empresa_endereco?></td>
                                      <td><?= $empresa->empresa_telefone?></td>
                                      <td><?= $empresa->empresa_email?></td>
                                      <td><?= $empresa->empresa_status?></td>
                                      <td>
                                            <button id="editar_permissoes" type="submit" class="btn btn-warning" data-toggle="modal" data-target=".bs-edit-modal-lg"
                                            data-id-setor="">Editar</button>                                                                                                 
                                      </td>
                                      <td>
                                            <form action="<?= base_url('admin/setores/removerSetor');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">                                                                    
                                                <input type="hidden" name="id" value="">                                                                                           
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

         <div class="col-lg-12">
            <h1> Informações importantes:</h1>                
              <h2> No momento de cadastrar tenha atenção. Não deixe campus vazios ou qualquer informação pela metade.</h2>                      
         </div>                              
            </div>
          </div>
       </div>
</div>

<script>

$(document).on('click', '#editar_permissoes', function() {
    $('#id_setor_modal_hidden').val($(this).attr("data-id-setor"));
    $('#id_setor_modal').val($(this).attr("data-id-setor"));    
    $('#descricao_setor_modal').val($(this).attr("data-descricao-setor"));
})


</script>
