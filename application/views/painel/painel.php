<div class="row">
    <div class="col-sm-3 col-md-3 cont">
  
        <h2 pn>Domínios</h2>
          
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              
              <!-- mostra os sites cadastrados pelo usuário -->
              <?php foreach($sites as $s){ ?>
            
                  <p> <a href="<?= base_url() ?>site/siteInfo/<?= $s->cd_Site; ?>"> <?= $s->nm_Site; ?> <br> <small><?= $s->ds_Dominio ?></small> </a></p>
              
              <?php } ?>    
            </li>
        
        </ul>
    </div>
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