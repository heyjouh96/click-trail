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
    

<div class="container">
    
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
</div>
    
    
    <!-- CADASTRO -->
    <section class="login-block">
      <div class="container">
          <div class="row">
              <div class="col-md-4 login-sec">
                  <h2 class="text-center">Fazer Cadastro</h2>
                  <form action="<?= base_url() ?>usuario/cadastrar" method="post" name="cadastro" class="login-form">
                      
                      <div class="form-group">
                          <label for="nome" class="text-uppercase">Nome</label>
                          <input type="text" class="form-control" name="nome" placeholder="Digite seu nome"> <br>
                      </div>
                      
                      <div class="form-group">
                          <label for="nome" class="text-uppercase">Sobrenome</label>
                          <input type="text" class="form-control" name="sbnome" placeholder="Digite seu sobrenome"> <br>
                      </div>
                      
                      <div class="form-group">
                          <label for="email" class="text-uppercase">E-mail</label>
                          <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail"> <br>
                      </div>
                      
                      <div class="form-group">
                          <label for="senha1" class="text-uppercase">Senha</label>
                          <input type="password" class="form-control" name="senha1" placeholder="Digite sua senha"> <br>
                      </div>
                      <div class="form-group">
                          <label for="senha2" class="text-uppercase">Confirmar Senha</label>
                          <input type="password" class="form-control" name="senha2" placeholder="Digite sua senha novamente"> <br>
                      </div>
                      
                      <div class="form-check">
                          <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              <small>Manter-me conectado</small>
                            </label>
                          <button type="submit" class="btn btn-login float-right">Fazer Cadastro</button>
                      </div>
                  </form>
              </div>
              
              <div class="col-md-8 banner-sec">
                 <div class="banner-text">
                    <h2>Click-Trail</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                 </div>		   
        	    </div>
          </div>
      </div>

    

