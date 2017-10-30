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