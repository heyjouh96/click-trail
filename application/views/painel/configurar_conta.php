
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
  	
  	<div class="container">
  		
  		<!-- ERRO AO FAZER UPDATE -->
      <?php if($this->session->flashdata('falhaUpdate')){ ?>
          <div class="alert alert-warning alert-dismissible show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?= $this->session->flashdata('falhaUpdate'); ?>
          </div>
      <?php } ?>
      
      <!-- SUCESSO AO FAZER UPDATE -->
      <?php if($this->session->flashdata('sucesUpdate')){ ?>
          <div class="alert alert-success alert-dismissible show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?= $this->session->flashdata('sucesUpdate'); ?>
          </div>
      <?php } ?>
  		
  		<h1>Configurações</h1>
		
		<b class="b-effect"><?= $this->session->userdata('nome') . " " . $this->session->userdata('sbnome') ?></b>
		<hr>
		
		<div class="col-lg-6 col-xs-12 form-setting">
		    
    		<!--<form action="<?= base_url() ?>usuario/trocarNome" method="post">-->
    		    <div class="row form-setting">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" value="<?= $this->session->userdata('nome') ?>" required>
                    </div>
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="sbnome">Sobrenome</label>
                        <input type="text" class="form-control" name="sbnome" value="<?= $this->session->userdata('sbnome') ?>" required> 
                    </div>
                </div>
              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#myModal" id="trocarNome">Alterar Nome</button>
            <!--</form>-->
		    
		    
		    <form action="<?= base_url() ?>#" method="post">
		        <div class="row form-setting">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" value="<?= $this->session->userdata('email') ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-danger">Alterar E-mail</button>
            </form>
		    <hr class="hr-style">
		    
		    <b class="b-effect">Alterar Senha</b>
		    <form action="<?= base_url() ?>#" method="post">
		        <div class="row form-setting">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="senhaold">Senha Antiga</label>
                        <input type="password" class="form-control" id="senhaold">
                    </div>
                </div>
                <div class="row form-setting">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="senhanew1">Senha Nova</label>
                        <input type="password" class="form-control" id="senhanew1">
                    </div>
                </div>
                <div class="row form-setting">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="senhanew2">Confirmar Senha Nova</label>
                        <input type="password" class="form-control" id="senhanew2">
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-danger">Alterar Senha</button>
            </form>
	
		    
		</div>
		
		<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Digite sua Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="password" name="confsenha" class="form-control"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="confirmaSenha" itemprop="">Salvar</button>
              </div>
            </div>
          </div>
        </div>
        
	</div>
	
</main>

<!--
-->