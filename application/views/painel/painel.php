
    
  
        <h2>Domínios</h2>
          
        
        <div class="row">
        <!-- mostra os sites cadastrados pelo usuário -->
        <?php foreach($sites as $s){ ?>
            <div class="col-lg-3 col-md-3 col-sm-3 info-site">
                <a href="<?= base_url() ?>site/siteInfo/<?= $s->cd_Site; ?>"> <?= $s->nm_Site; ?> <br> <small><?= $s->ds_Dominio ?></small> </a>
            </div>
        <?php } ?>
        </div>
        
    


