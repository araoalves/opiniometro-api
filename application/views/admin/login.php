    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

     <div class="login_wrapper container">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?= base_url('admin/login/');?>" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
              <h1>Sistema Administrador</h1>
                <h2> Faça seu login</h2>
              <div>
                <input type="text" class="form-control" placeholder="Digite seu usuário" id="matricula" name="matricula" required/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Digite sua senha" id="senha" name="senha" required/>
              </div>
                <?php if ($this->session->flashdata('error') == TRUE): ?>                    
                    <?php 
                        $div = ' <div class="alert alert-danger" style="font-size:18px;font-stretch:normal;text-shadow:0px 0px 0px;color:#fff;">
                                    '.$this->session->flashdata('error').'
                                 </div>';                        
                        echo $div;
                    ?>                   
                  <?php endif; ?>

              <div>
                <button type="submit" class="btn btn-primary btn-block" id="login">Entrar</button>
              </div>

             <div class="clearfix"></div>

             <div class="separator">
                <p class="change_link">Esqueceu sua senha?
                  <a href="#signup" class="to_register"> Entre em contato com o NTI </a>
                </p>

               <div class="clearfix"></div>
                <br />

               <div>
                  <h1> Sistema Administrador</h1>
                  <p>©2017 Todos os direitos reservados. </p>
                </div>
              </div>
            </form>
          </section>
        </div>

     
      </div>
    </div>

  