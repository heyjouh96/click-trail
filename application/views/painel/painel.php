

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
    
    
    
  <!--menu vertical-->  
  
  <div class="navi">
      
      <nav class="col-sm-3 col-md-3 side">
          <h2 pn>Painel</h2>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
              <a href="#"><span class="username"> <?= $usuario->nm_Usuario; ?> </span></a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>paginas/cadastrarSite">Cadastrar novo Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>usuario/logout">Sair</a>
            </li>
          </ul>
  
          
      
          <h2 pn>Domínios</h2>
  
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              
              <!-- mostra os sites cadastrados pelo usuário -->
              <?php foreach($sites as $s){ ?>
          
                  <p> <a href="<?= base_url() ?>site/siteInfo/<?= $s->cd_Site; ?>"> <?= $s->nm_Site; ?> <br> <small><?= $s->ds_Dominio ?></small> </a></p>
              
              <?php } ?>    
            </li>
          </ul>
      </nav>
  </div>
  
  


<!--
<div class="container-fluid">      

    

    <h1>Painel</h1>
    
    <p class="username"> <?= $usuario->nm_Usuario; ?> </p>  
    
    <p> <a href="<?= base_url() ?>cadastro/cadastrarSite">Cadastrar novo Site</a> </p>
    <p> <a href="<?= base_url() ?>login/logout">Sair</a> </p>
    
    <hr>
    
    <h2>Domínios</h2>
    
    <!-- mostra os sites cadastrados pelo usuário
    <?php foreach($sites as $s){ ?>
        
        <p> <a href="<?= base_url() ?>painel/siteInfo/<?= $s->cd_Site; ?>"> <?= $s->ds_Dominio; ?> </a></p>
    
    <?php } ?>    
</div>
-->
  <!--menu principal-->