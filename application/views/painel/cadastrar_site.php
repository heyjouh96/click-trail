
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">   
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
      
      
      
      <h1>Cadastrar Site</h1>
      
      <h2>Novo Site</h2>
      <form action="<?= base_url() ?>site/cadastrar" method="post" name="cadastro">
          
          <label for="nome">Nome do Site</label>
          <input type="text" name="nome" placeholder="Digite o nome do seu Website"> <br>
          
          <label for="dominio">Domínio</label>
          <input type="text" name="dominio" placeholder="Digite o domínio do seu Website">
          <small class="form-text text-muted">Ex: www.clicktrail.com.br</small>
          
          
          <input type="submit" value="Cadastrar">
          
      </form>

</main>