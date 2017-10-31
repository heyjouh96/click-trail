<nav class="navbar navbar-expand-md navbar-dark ">
    <a class="navbar-brand" href="#">Click-trail</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class= "nav-link glyphicon glyphicon-user" href="#" >Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastro</a>
        </li>
      </ul>
    </div>
</nav>
    


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
    
</div>