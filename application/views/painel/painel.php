
  <div class="content-wrapper">
    <div class="container-fluid">
        
        <h1>Painel</h1>
        
        <h2>Domínios</h2>
      <!-- Icon Cards-->
        <div class="row">
            <?php foreach($sites as $s){ ?>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-user-circle-o"></i>
                        </div>
                        <div class="mr-5"><?= $s->nm_Site ?><br><small><?= $s->ds_Dominio ?></small></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?= base_url() ?>site/siteInfo/<?= $s->cd_Site; ?>">
                        <span class="float-left">Ver Informações</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">$34,693</div>
                  <div class="small text-muted">YTD Revenue</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">$18,474</div>
                  <div class="small text-muted">YTD Expenses</div>
                  <hr>
                  <div class="h4 mb-0 text-success">$16,219</div>
                  <div class="small text-muted">YTD Margin</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          
            
          <!-- /Card Columns-->
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          
        </div>
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