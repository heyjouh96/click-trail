
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
                        <div class="mr-5"><?= $s->nm_site ?><br><small><?= $s->ds_dominio ?></small></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 info-site2" href="<?= base_url() ?>site/siteInfo/<?= $s->cd_site; ?>">
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
