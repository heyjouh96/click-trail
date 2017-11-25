
  <div class="content-wrapper">
    <div class="container-fluid">
        
        <h1>Painel</h1>
        
        <h2>Domínios</h2>
      <!-- Icon Cards-->
        <div class="row">
            <?php foreach($sites as $s){ ?>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body info-site">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-user-circle-o"></i>
                        </div>
                        <div class="mr-5"><?= $s->nm_Site ?><br><small><?= $s->ds_Dominio ?></small></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 info-site2" href="<?= base_url() ?>site/siteInfo/<?= $s->cd_Site; ?>">
                        <span class="float-left">Ver Informações</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
     
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->




<!--
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 fundo">   
        
        
          
        <h2>Domínios</h2>
          
        <div class="row">
        <!-- mostra os sites cadastrados pelo usuário 
        <?php foreach($sites as $s){ ?>
            <div class="col-lg-3 col-md-3 col-sm-3 info-site">
    			
                <a href="<?= base_url() ?>assets/site/siteInfo/<?= $s->cd_Site; ?>"> <br> <small><?= $s->ds_Dominio ?></small> </a>
                <span><i class="icono-flag"></i></span> <br>
                <small style="color:white">Dominios</small>
                <a href="<?= base_url() ?>assets/site/siteInfo/<?= $s->cd_Site; ?>" class="info-site2"><?= $s->nm_Site; ?></a>
            </div>
        <?php } ?>
            
            
            
        </div>
        
</main>-->