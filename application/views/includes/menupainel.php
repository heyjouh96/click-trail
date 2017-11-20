
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Click-Trail </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto"></ul>
          <div class="form-inline mt-2 mt-md-0">
            <span><i class="icono-user iconeSmall"></i></span>
            <p class="mr-sm-2"><?= $this->session->userdata('nome') ?></p>
          </div>
        </div>
      </nav>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block sidebar side navi">
          <ul class="nav nav-pills flex-column">
            
            <li class="nav-item <?php if($active == 'inicial'){ echo 'active';} ?>">
              <a href="<?= base_url() ?>paginas/painel"> <span><i class="icono-home"></i></span>Inicial</a>
              
            </li>
            <li class="nav-item <?php if($active == 'cadastroSite'){ echo 'active';} ?>">
              <a class="nav-link" href="<?= base_url() ?>paginas/cadastrarSite"> <span><i class="icono-plus"></i></span>Cadastrar novo Site</a>
            </li>
            <li class="nav-item <?php if($active == 'configurarConta'){ echo 'active';} ?>">
              
              <a class="nav-link" href="<?= base_url() ?>paginas/configurarConta"><span><i class="icono-gear"></i></span>Configurações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>usuario/logout"><span><i class="icono-signOut"></i></span>Sair</a>
            </li>
          </ul>
          <button class="btn btn-lg btn-outline-warning my-2 my-sm-0 ml-sm-2" type="submit">Seja Premium</button>
          
        </nav>
        
        