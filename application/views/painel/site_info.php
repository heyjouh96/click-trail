
<!--Pizza Grafico-->



<!--<div id="chartBar" style="height: 370px; width: 100%;"></div>
<div id="chartLine" style="height: 370px; width: 100%;"></div>


<button id="btnMostrarEsconder" >OI</button>-->



    

<div class="col-sm-8 col-md-8 col-lg-10">
      
      <h1><?= $info[0]->nm_Site; ?></h1>
      
      <p><b>Domínio: </b> <?= $info[0]->ds_Dominio; ?> </p>
      <p><b>Total de Clicks: </b> <?= $info[0]->total; ?> </p>
      
      <h2>Visão Geral</h2>
      <div class="row">
            <div class="col-lg-5 col-sm-12">
                  
                  <?php foreach($itens as $i){ ?>
                      
                  <p> <b class="itemDs"><?= $i->ds ?></b> : <span class="itemQtd"><?= $i->qtd ?></span> clicks <p>
                      
                  <?php } ?>
                  
                  <h2>Porcentagem</h2>
                  
                  <?php foreach($itens as $i){ ?>
                      
                  <h3> <?= $i->ds ?> </h3>
                  <progress value="<?= $i->qtd ?>" max="<?= $info[0]->total ?>"></progress> <small><?= round(($i->qtd * 100)/$info[0]->total, 2) ?> %</small>
                      
                  <?php } ?>
            </div>
            <div class="col-lg-7 col-sm-12" style="background: red">
                  <button id="mostraPizza">Gráfico Pizza</button>
                  <button id="mostraBarras">Gráfico Barra</button>
                  <button id="mostraLinhas">Gráfico Linha</button>
                  <div id="chartPie" style="height: 370px; width: 100%;"></div>
            </div>
      </div>
      <hr> 
      <h1>Este Mes <small><?= date('F'); ?></small></h1>
      
      <h2>Visão Geral</h2>
      
      <?php foreach($esteMes as $em){ ?>
          
      <h3> <?= $em->ds ?> </h3>
      <p>Total de clicks: <?= $em->qtd ?></p>
          
      <?php } ?>
      
      
      
      <h2>Porcentagem</h2>
      
      <?php foreach($esteMes as $em){ ?>
          
      <h3> <?= $em->ds ?> </h3>
      <progress value="<?= $em->qtd ?>" max="<?= $info[0]->total ?>"></progress> <small><?= round(($em->qtd * 100)/$info[0]->total, 2) ?> %</small>
          
      <?php } ?>
      
      <hr> 
      

</div>