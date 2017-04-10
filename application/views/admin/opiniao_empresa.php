   <div class="container body">
      <div class="main_container">
           <div class="right_col" role="main">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Relatório de Opiniões Empresarial <small></small></h2>
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
                          <th>Data</th>                          
                          <th>Empresa</th>
                          <th>Ótimo</th>
                          <th>Bom</th>
                          <th>Regular</th>
                          <th>Ruim</th>
                          <th>Péssimo</th>
                        </tr>
                      </thead>
                        <tbody>
                         	<?php foreach ($listOpiniaoEmpresa as $opiniao_usuario):?>								
									<tr>									  
                                      <td><?= date('d/m/Y', strtotime($opiniao_usuario->opiniao_data));?></td>									  
                                      <td><?= $opiniao_usuario->empresa_descricao?></td>
                                      <td><?= $opiniao_usuario->opiniao_otimo?></td>
                                      <td><?= $opiniao_usuario->opiniao_bom?></td>
                                      <td><?= $opiniao_usuario->opiniao_regular?></td>
                                      <td><?= $opiniao_usuario->opiniao_ruim?></td>
                                      <td><?= $opiniao_usuario->opiniao_pessimo?></td>
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

$(document).on('click', '#editar_permissoes', function() {
    $('#id_permissao_hidden').val($(this).attr("data-id-permissao"));
    $('#id_permissao').val($(this).attr("data-id-permissao"));    
    $('#descricao_permissao').val($(this).attr("data-descricao-permissao"));
})


</script>
