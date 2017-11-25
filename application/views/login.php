<nav class="navbar navbar-style navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="<?= base_url() ?>">Click-trail</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>paginas/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>paginas/cadastro">Cadastro</a>
        </li>
      </ul>
    </div>
</nav>
    

<div class="container">
    
    
</div>    
 
 <!-- LOGIN -->
    <section class="login-block">
        <div class="container">
        	<div class="row">
        		<div class="col-md-4 login-sec">
        		    
        		    <h2 class="text-center">Login</h2>
        		    
        		    <!-- LOGIN - MENSAGEM DE ERRO -->
                <?php if($this->session->flashdata('falhaLogin')){ ?>
                    <div class="alert alert-warning alert-dismissible show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <?= $this->session->flashdata('falhaLogin'); ?>
                    </div>
                <?php } ?>
        		    
        		    <form action="<?= base_url() ?>usuario/logar" method="post" name="login" class="login-form">
                          <div class="form-group">
                              <label for="email" class="text-uppercase">E-mail</label>
                              <input type="text" class="form-control" name="email" placeholder="Digite seu e-mail" required> <br>
                            
                          </div>
                          
                          <div class="form-group">
                              <label for="senha" class="text-uppercase">Senha</label>
                              <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" required>
                          </div>
                      
                      
                          <div class="form-group">
                              <button type="submit" class="btn btn-login float-right">Fazer Login</button>
                          </div>
                    </form><br>
                    
                    
    		    </div>
    		    
        		<div class="col-md-8 banner-sec">
                     <div class="banner-text">
                        <h2>Click-Trail</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                     </div>		   
            	</div>
	        </div>
        </div>



