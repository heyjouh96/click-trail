<div class="content-wrapper">
    <div class="container-fluid">
      
        <!-- CADASTRO - MENSAGEM DE ERRO -->
        <?php if($this->session->flashdata('falhaCadastro')){ ?>
            <div class="alert alert-warning alert-dismissible show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?= $this->session->flashdata('falhaCadastro'); ?>
            </div>
        <?php } ?>
        
        <!-- CADASTRO - MENSAGEM DE SUCESSO -->
        <?php if($this->session->flashdata('sucesCadastro')){ ?>
            <div class="alert alert-success alert-dismissible show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?= $this->session->flashdata('sucesCadastro'); ?>
            </div>
        <?php } ?>
        
        <h1>Cadastrar Novo Site</h1>
        
        <div class="card mb-3 col-lg-5 col-md-5 col-sm-5 panel">
          <div class="form-style">
            
            <form action="<?= base_url() ?>site/cadastrar" method="post" name="cadastro">
                <div class="form-group">
                  <label for="nome" class="col-form-label">Nome do Site</label> <br>
                  <input type="text" name="nome" placeholder="Digite o nome do seu Website" class="form-control">
                </div>
                
                <div class="form-group">
                  <label for="dominio" class="col-form-label">Domínio</label>
                  <input type="text" name="dominio" placeholder="Digite o domínio do seu Website" class="form-control">
                  <small class="form-text text-muted">Ex: clicktrail.com.br</small>
                </div>
                
                <input type="submit" value="Cadastrar" class="btn btn-danger mb-3">
                
            </form>
          </div>
        
        
        
     
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->