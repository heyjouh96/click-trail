
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 fundo">   
        
        
          
        <h2>Domínios</h2>
          
        <div class="row">
        <!-- mostra os sites cadastrados pelo usuário -->
        <?php foreach($sites as $s){ ?>
            <div class="col-lg-3 col-md-3 col-sm-3 info-site">
    			
                <a href="<?= base_url() ?>site/siteInfo/<?= $s->cd_Site; ?>"> <br> <small><?= $s->ds_Dominio ?></small> </a>
                <span><i class="icono-flag"></i></span> <br>
                <small style="color:white">Dominios</small>
                <a href="<?= base_url() ?>site/siteInfo/<?= $s->cd_Site; ?>" class="info-site2"><?= $s->nm_Site; ?></a>
            </div>
        <?php } ?>
            
            
            
        </div>
        
</main>       