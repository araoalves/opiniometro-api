   <div class="container body">
      <div class="main_container">
           <div class="right_col" role="main">
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastrar Financiamento <small> informe os dados corretamente!</small></h2>
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
                    <form action="<?= base_url('admin/financiamento/cadastrarFinanciamento');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe a descrição do financiamento: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="vt52desfin" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe a porcentagem do financiamento: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="vt52perdsc" required="required" class="form-control col-md-7 col-xs-12">
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
                          <h4 class="modal-title" id="myModalLabel">Editar Financiamento</h4>
                        </div><br><br>
                        
                         <form action="<?= base_url('admin/financiamento/editarFinanciamento');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">                    
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" id="id_hidden" name="id_hidden">
                                    <input type="text" id="id" name="vt52codigo" required="required" class="form-control col-md-7 col-xs-12" disabled="true">                                    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe a descrição do financiamento: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" id="descricao_hidden" name="descricao_hidden">
                                    <input type="text" id="descricao" name="vt52desfin" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>                              
                                    
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Informe a porcentagem do financiamento: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" id="percentual_hidden" name="percentual_hidden">
                                    <input type="text" id="percentual" name="vt52perdsc" required="required" class="form-control col-md-7 col-xs-12">
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
                    <h2>Lista de Financiamentos <small></small></h2>
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
                          <th>Descrição</th>
                          <th>Percentual de Desconto</th>
                          <th>Editar</th>
                          <th>Remover</th>                           
                        </tr>
                      </thead>
                        <tbody>
                         	<?php foreach ($listFinanciamentos as $financiamentos):?>								
									<tr>
									  <td><?= $financiamentos->VT52CODIGO?></td>
									  <td><?= $financiamentos->VT52DESFIN?></td>
									  <td><?= $financiamentos->VT52PERDSC?></td>
                                      <td>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button id="editar" type="submit" class="btn btn-warning" data-toggle="modal" data-target=".bs-edit-modal-lg" data-id="<?= $financiamentos->VT52CODIGO?>" data-descricao="<?= $financiamentos->VT52DESFIN?>" data-percentual="<?= $financiamentos->VT52PERDSC?>">Editar</button>                                                                  
                                            </div>
                                        </div>                                    
                                      </td>
                                      <td>
                                            <form action="<?= base_url('admin/financiamento/removerFinanciamento');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">                                                                    
                                                <input type="hidden" name="id" value="<?= $financiamentos->VT52CODIGO?>">                                                                                           
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-danger" onClick="return confirm('Deseja Remover?');">Remover</button>                                                                                                   
                                                    </div>
                                                </div>
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
              <h2> No momento de cadastrar os cursos, tenha atenção. Não deixe campus vazios ou qualquer informação pela metade.</h2>                      
         </div>                              
            </div>
          </div>
       </div>
</div>
