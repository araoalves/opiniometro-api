   <div class="container body">
      <div class="main_container">
           <div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastrar Usuário <small> informe os dados corretamente!</small></h2>
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

                  <?php if ($this->session->flashdata('cadastro_sucesso') == TRUE) : ?>                    
                    <?php 
                    $div = '<div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>' . $this->session->flashdata('cadastro_sucesso') . '</div>';
                    echo $div;
                    ?>                   
                  <?php endif; ?>

                   <?php if ($this->session->flashdata('error') == TRUE) : ?>                    
                    <?php 
                    $div = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>' . $this->session->flashdata('error') . '</div>';
                    echo $div;
                    ?>                   
                  <?php endif; ?>

                    <br />
                    <form action="<?= base_url('admin/usuario/cadastrarUsuario'); ?>" data-parsley-validate class="form-horizontal form-label-left" method="post">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o Usuário: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="usuario" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o Nome: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nome" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o CPF: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="text" name="cpf" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe uma Senha: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="password" name="senha" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o E-mail: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o Telefone: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="text" name="telefone" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe a data de nascimento: <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-6">
                          <input type="date" name="data_nascimento" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione a Permissão: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="select_permissao" name="select_permissao" class="select2_single form-control" tabindex="-1" required="required">
                              <?php foreach ($listPermissoes as $permissao) : ?>																		                               
                                 <option value="<?= $permissao->permissao_id ?>"><?= $permissao->permissao_id ?>   -   <?= $permissao->permissao_descricao ?></option>										
						                  <?php endforeach; ?>  
                          </select>
                        </div>
                      </div>

                       <?php if ($this->session->permissao == "2") : ?> 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione o Setor: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="select_setor" name="select_setor" class="select2_single form-control" tabindex="-1" required="required">
                                  <?php foreach ($listSetorEmpresa as $setor) : ?>																		                               
                                    <option value="<?= $setor->setor_id ?>"><?= $setor->setor_id ?>   -   <?= $setor->setor_descricao ?></option>										
                                  <?php endforeach; ?>  
                              </select>
                            </div>
                          </div> 
                        <?php endif; ?>

                      <?php if ($this->session->permissao == "1") : ?>  

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione a Empresa: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="empresa" name="empresa" class="select2_single form-control" tabindex="-1" required="required">
                                  <option>Escolha a Empresa</option>          
                                  <?php foreach ($listEmpresas as $empresa) : ?>																		                               
                                    <option value="<?= $empresa->empresa_id ?>"><?= $empresa->empresa_id ?>   -   <?= $empresa->empresa_razao_social ?></option>										
                                  <?php endforeach; ?>  
                              </select>
                            </div>
                          </div>

                         <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione o Setor: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="select_setor" name="select_setor" class="select2_single form-control" tabindex="-1" required="required"> 
                            </select>
                          </div>
                        </div>
            
                       <?php endif; ?>

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
                          <h4 class="modal-title" id="myModalLabel">Editar Usuário</h4>
                        </div><br><br>
                        
                         <form action="<?= base_url('admin/usuario/editarUsuario'); ?>" data-parsley-validate class="form-horizontal form-label-left" method="post">                    

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Usuário: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="hidden" id="id_usuario_hidden" name="id_usuario_hidden">
                          <input type="text" id="id_usuario_edit" name="id_usuario_edit" required="required" class="form-control col-md-7 col-xs-12" disabled="true">                                    
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o Usuário: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="usuario_edit" name="usuario_edit" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o Nome: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nome_edit" name="nome_edit" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o CPF: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="text" id="cpf_edit" name="cpf_edit" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o E-mail: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email_edit" name="email_edit" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe o Telefone: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="text" id="telefone_edit" name="telefone_edit" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe a data de nascimento: <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="date" id="data_nascimento_edit" name="data_nascimento_edit" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione a Permissão: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="select_permissao_edit" name="select_permissao_edit" class="select2_single form-control" tabindex="-1" required="required">
                              <?php foreach ($listPermissoes as $permissao) : ?>																		                               
                                 <option value="<?= $permissao->permissao_id ?>"><?= $permissao->permissao_id ?>   -   <?= $permissao->permissao_descricao ?></option>										
						                  <?php endforeach; ?>  
                          </select>
                        </div>
                      </div>

                       <?php if ($this->session->permissao == "2") : ?> 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione o Setor: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="select_setor_edit" name="select_setor_edit" class="select2_single form-control" tabindex="-1" required="required">
                                  <?php foreach ($listSetorEmpresa as $setor) : ?>																		                               
                                    <option value="<?= $setor->setor_id ?>"><?= $setor->setor_id ?>   -   <?= $setor->setor_descricao ?></option>										
                                  <?php endforeach; ?>  
                              </select>
                            </div>
                          </div> 
                        <?php endif; ?>

                      <?php if ($this->session->permissao == "1") : ?>  

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione a Empresa: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="empresa_edit" name="empresa_edit" class="select2_single form-control" tabindex="-1" required="required">
                                  <option>Escolha a Empresa</option>          
                                  <?php foreach ($listEmpresas as $empresa) : ?>																		                               
                                    <option value="<?= $empresa->empresa_id ?>"><?= $empresa->empresa_id ?>   -   <?= $empresa->empresa_razao_social ?></option>										
                                  <?php endforeach; ?>  
                              </select>
                            </div>
                          </div>

                         <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selecione o Setor: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="select_setor_edit" name="select_setor_edit" class="select2_single form-control" tabindex="-1" required="required"> 
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

                  <div class="modal fade bs-editsenha-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Alterar Senha</h4>
                        </div><br><br>
                        
                         <form action="<?= base_url('admin/usuario/editarSenhaUsuario'); ?>"  data-parsley-validate class="form-horizontal form-label-left" method="post">                    
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                    <input type="hidden" id="hidden_edit_senha" name="hidden_edit_senha">
                                    <input type="text" id="id_edit_senha" name="id_edit_senha" required="required" class="form-control col-md-7 col-xs-12" disabled="true">                                    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Usuário: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="hidden" id="usuario_edit_senha_hidden" name="usuario_edit_senha_hidden">
                                    <input type="text" id="usuario_edit_senha" name="usuario_edit_senha" required="required" class="form-control col-md-7 col-xs-12" disabled="true">
                                    </div>
                                </div>                              
                                    
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nova Senha: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">                                    
                                        <input type="password" id="senha_edit" name="senha_edit" required="required" class="form-control col-md-7 col-xs-12">
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
                    <h2>Lista de Usuários <small></small></h2>
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

                   <?php if ($this->session->flashdata('exclusao_sucesso') == TRUE) : ?>                    
                    <?php 
                    $div = '<div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>' . $this->session->flashdata('exclusao_sucesso') . '</div>';
                    echo $div;
                    ?>                   
                  <?php endif; ?>

                    <?php if ($this->session->flashdata('exclusao_error') == TRUE) : ?>                    
                    <?php 
                    $div = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>' . $this->session->flashdata('exclusao_error') . '</div>';
                    echo $div;
                    ?>                   
                  <?php endif; ?>

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Usuário</th>
                          <th>Nome</th>
                          <th>CPF</th>
                          <th>E-mail</th>                           
                          <th>Telefone</th>
                          <th>Dt Nascimento</th>
                          <th>Permissão</th>                          
                          <th>Setor</th>
                          <th>Empresa</th>
                          <th>Alterar Senha</th>
                          <th>Editar</th>
                          <th>Remover</th>
                        </tr>
                      </thead>
                        <tbody>
                         	<?php foreach ($listUsuarios as $usuario) : ?>								
									<tr>
									  <td><?= $usuario->usuario_id ?></td>
									  <td><?= $usuario->usuario ?></td>
									  <td><?= $usuario->usuario_nome ?></td>
                                      <td><?= $usuario->usuario_cpf ?></td>
                                      <td><?= $usuario->usuario_email ?></td>
                                      <td><?= $usuario->usuario_telefone ?></td>
                                     
                                      <td><?= date('d/m/Y', strtotime($usuario->usuario_dt_nasc)); ?></td>
                                      <td><?= $usuario->permissao_descricao ?></td>
                                      <td><?= $usuario->setor_descricao ?></td>
                                      <td><?= $usuario->empresa_descricao ?></td>
                                      <td>
                                            <button id="editar_senha" type="submit" class="btn btn-warning" data-toggle="modal" data-target=".bs-editsenha-modal-lg"
                                            data-id-usuario="<?= $usuario->usuario_id ?>" data-usuario="<?= $usuario->usuario ?>">Alterar Senha</button>                                                                                                     
                                      </td>
                                      <td>
                                            <button id="editar_user" type="submit" class="btn btn-warning" data-toggle="modal" data-target=".bs-edit-modal-lg"
                                            data-id-usuario-edit="<?= $usuario->usuario_id ?>" 
                                            data-usuario="<?= $usuario->usuario ?>"
                                            data-nome="<?= $usuario->usuario_nome ?>"
                                            data-cpf="<?= $usuario->usuario_cpf ?>"
                                            data-email="<?= $usuario->usuario_email ?>"
                                            data-telefone="<?= $usuario->usuario_telefone ?>"
                                            data-data-nascimento="<?= $usuario->usuario_dt_nasc ?>"
                                            >Editar</button>                                                                                                 
                                      </td>
                                      <td>
                                            <form action="<?= base_url('admin/usuario/removerUsuario'); ?>" data-parsley-validate class="form-horizontal form-label-left" method="post">                                                                    
                                                <input type="hidden" name="id" value="<?= $usuario->usuario_id ?>">                                                                                           
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

$(document).on('click', '#editar_senha', function() {
    $('#hidden_edit_senha').val($(this).attr("data-id-usuario"));
    $('#id_edit_senha').val($(this).attr("data-id-usuario"));
    $('#usuario_edit_senha').val($(this).attr("data-usuario"));
    $('#usuario_edit_senha_hidden').val($(this).attr("data-usuario"));
});


$(document).on('click', '#editar_user', function() {
    $('#id_usuario_hidden').val($(this).attr("data-id-usuario-edit"));
    $('#id_usuario_edit').val($(this).attr("data-id-usuario-edit"));
    $('#usuario_edit').val($(this).attr("data-usuario"));
    $('#nome_edit').val($(this).attr("data-nome"));
    $('#cpf_edit').val($(this).attr("data-cpf"));
    $('#email_edit').val($(this).attr("data-email"));
    $('#telefone_edit').val($(this).attr("data-telefone"));
    $('#data_nascimento_edit').val($(this).attr("data-data-nascimento"));
})

$("#empresa").change(function() { 
    var valores = $('#empresa option:selected').val().split("#");

         $.ajax({
            type: 'post',
            url: '<?= base_url("admin/usuario/recuperarSetoresEmpresa"); ?>',
            data: {                
                'codEmpresa': valores[0]
            },
            success: function(data) {
            	if ((data.errors)){
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {                    
                        var options = '';
                        var retorno = JSON.parse(data);
                                                
                        retorno.forEach(function(valor,chave){
                            options += '<option value="' + valor.setor_id +'">Cod: '+valor.setor_id +' -  Setor: ' +valor.setor_descricao+'</option>';
                        });  
                        $('#select_setor').html(options).show();
                        $('.carregando').hide();                                           
                    }                                        
            },

})
});


</script>