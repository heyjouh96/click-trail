
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 ">   
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
      
      
      <div class="container-fluid addsite login-sec">
        <h1 style="border:none">Cadastrar Site</h1>
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="form-style">
              
              
              
              <form action="<?= base_url() ?>site/cadastrar" method="post" name="cadastro">
                <h2 class="text-center">Novo Site</h2>
                  <div class="form-group">
                    <label for="nome" class="col-form-label">Nome do Site</label> <br>
                    <input type="text" name="nome" placeholder="Digite o nome do seu Website" class="form-control"> <br>
                  </div>
                  
                  <div class="form-group">
                    <label for="dominio" class="col-form-label">Domínio</label>
                    <input type="text" name="dominio" placeholder="Digite o domínio do seu Website" class="form-control">
                    <small class="form-text text-muted">Ex: clicktrail.com.br</small>
                  </div>
                  
                  <input type="submit" value="Cadastrar" class="btn btn-danger">
                  
              </form>
            </div>
          </div>
        </div>
      </div>
</main>

