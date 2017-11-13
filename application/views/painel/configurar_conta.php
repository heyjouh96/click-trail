
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
		
		<b><?= $this->session->userdata('nome') . " " . $this->session->userdata('sbnome') ?></b>
		<hr>
		
		<div class="col-lg-6 col-xs-12">
		    
    		<form action="<?= base_url() ?>usuario/trocarNome" method="post">
    		    <div class="row">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" value="<?= $this->session->userdata('nome') ?>" required>
                    </div>
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="sbnome">Sobrenome</label>
                        <input type="text" class="form-control" name="sbnome" value="<?= $this->session->userdata('sbnome') ?>" required> 
                    </div>
                </div>
              <button type="submit" class="btn btn-primary">Alterar Nome</button>
            </form>
		    <hr>
		    
		    <form action="<?= base_url() ?>#" method="post">
		        <div class="row">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" value="<?= $this->session->userdata('email') ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Alterar E-mail</button>
            </form>
		    <hr>
		    
		    <b>Alterar Senha</b>
		    <form action="<?= base_url() ?>#" method="post">
		        <div class="row">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="senhaold">Senha Antiga</label>
                        <input type="password" class="form-control" id="senhaold">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="senhanew1">Senha Nova</label>
                        <input type="password" class="form-control" id="senhanew1">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-xs-12">
                        <label for="senhanew2">Confirmar Senha Nova</label>
                        <input type="password" class="form-control" id="senhanew2">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Alterar Senha</button>
            </form>
		    <hr>
		    
		</div>
		
	</div>
	
</main>
	


<!--
-->