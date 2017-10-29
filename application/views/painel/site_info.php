
<?= date('W'); ?>

<div class="container-fluid">      
    
    <h1>Informações</h1>
    
    <p><b>Website: </b> <?= $info[0]->ds_Dominio; ?> </p>
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
    
</div>