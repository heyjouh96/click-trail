
    

<div class="col-sm-8 col-md-8 col-lg-8">
      <h1><?= $info[0]->nm_Site; ?></h1>
      
      <p><b>Domínio: </b> <?= $info[0]->ds_Dominio; ?> </p>
      <p><b>Total de Clicks: </b> <?= $info[0]->total; ?> </p>
      
      <h2>Visão Geral</h2>
      
      <?php foreach($itens as $i){ ?>
          
      <h3> <?= $i->ds ?> </h3>
      <p>Total de clicks: <?= $i->qtd ?></p>
          
      <?php } ?>
      
      
      
      <h2>Porcentagem</h2>
      
      <?php foreach($itens as $i){ ?>
          
      <h3> <?= $i->ds ?> </h3>
      <progress value="<?= $i->qtd ?>" max="<?= $info[0]->total ?>"></progress> <small><?= round(($i->qtd * 100)/$info[0]->total, 2) ?> %</small>
          
      <?php } ?>
      
      <hr>
      
      <!-- ESTE MÊS -->
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