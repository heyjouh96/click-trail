<div class="content-wrapper">
    <div class="container-fluid">
      
        <!-- ERRO AO FAZER UPDATE -->
      <?php if($this->session->flashdata('falhaUpdate')){ ?>
          <div class="alert alert-danger alert-dismissible show" role="alert">
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

		    
      <!-- TROCA NOME -->
      <b class="b-effect">Alterar Nome</b>
	    <div class="row form-setting">
        <div class="form-group col-lg-6 col-xs-12">
            <input type="text" class="form-control" name="nome" value="<?= $this->session->userdata('nome') ?>" disabled>
        </div>
        <div class="form-group col-lg-6 col-xs-12">
            <input type="text" class="form-control" name="sbnome" value="<?= $this->session->userdata('sbnome') ?>" disabled> 
        </div>
        <button type="button" class="btn btn-outline-danger ml-2" data-toggle="modal" data-target="#nomeModal">Alterar</button>
      </div>
      <hr class="hr-style">
      
      <!-- TROCA E-MAIL -->
      <b class="b-effect">Alterar E-mail</b>
      <div class="row form-setting">
        <div class="form-group col-lg-6 col-xs-12">
            <input type="email" class="form-control" id="email" value="<?= $this->session->userdata('email') ?>" disabled> <br>
            <button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#emailModal">Alterar</button>
        </div>
      </div>
		  
		  <!-- TROCA SENHA -->
		  <hr class="hr-style">
      <b class="b-effect">Alterar Senha</b><br><br>
      <button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#senhaModal">Alterar</button>
      
      

		<!-- Modal Troca Nome -->
    <div class="modal fade" id="nomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Trocar Nome</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url() ?>usuario/configurarConta" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label>Novo Nome</label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" name="nome" value="<?= $this->session->userdata('nome') ?>" required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" name="sbnome" value="<?= $this->session->userdata('sbnome') ?>" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="confSenha">Digite sua Senha</label>
                <input type="password" name="confSenha" class="form-control" required/>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <input type="submit" class="btn btn-primary" value="Salvar">
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- Modal Troca E-mail --> 
    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Trocar E-mail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url() ?>usuario/configurarConta" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="email">Novo E-mail</label>
                <input type="text" class="form-control" name="email" value="<?= $this->session->userdata('email') ?>" required>
              </div>
              <div class="form-group">
                <label for="confSenha">Digite sua Senha</label>
                <input type="password" name="confSenha" class="form-control" required/>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <input type="submit" class="btn btn-primary" value="Salvar">
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- Modal Troca Senha -->
    <div class="modal fade" id="senhaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Trocar Senha</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url() ?>usuario/configurarConta" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="senha">Nova Senha</label>
                <input type="password" class="form-control" name="senha" required>
              </div>
              <div class="form-group">
                <label for="confSenha">Digite sua Senha Atual</label>
                <input type="password" name="confSenha" class="form-control" required/>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <input type="submit" class="btn btn-primary" value="Salvar">
            </div>
          </form>
        </div>
      </div>
    </div>
     
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->