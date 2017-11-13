
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
  	
  	<div class="container">
  		
  		<div class="page-header">
  			<div class="row">
  				<div class="col-lg-7">
				  	<h2><?= $info[0]->nm_Site; ?></h2>
				  	<p class="dominio"><?= $info[0]->ds_Dominio; ?> </p>
				</div>
				<div class="col-lg-3 ml-auto">
					<p>Total</p>
	  				<h2><?= $info[0]->total; ?> Clicks</h2>
				</div>
		  	</div>
		</div>
  	
  	
	  	
		
		<div class="row">
			<div class="col-lg-5 col-xs-12">
				<h1>Visão Geral</h1>
		
					<?php foreach($itens as $i){ ?>
					  
					<p> <b class="itemDs"><?= $i->ds ?></b> : <span class="itemQtd"><?= $i->qtd ?></span> clicks <p>
					  
					<?php } ?>
					
					<?php foreach($itens as $i){ ?>
					
					<div style='display:none'>  
						<progress value="<?= $i->qtd ?>" max="<?= $info[0]->total ?>"></progress> <small class='itemPct'><?= round(($i->qtd * 100)/$info[0]->total, 2) ?> %</small>
					</div>  
					<?php } ?>
					
					<h1>Este Mês <small><?= date('F'); ?></small></h1>
					
					<?php foreach($esteMes as $em){ ?>
		  
					<h3>  </h3>
					<p> <b><?= $em->ds ?> :</b> <span><?= $em->qtd ?> </span> clicks </p>
					  
					<?php } ?>
					
					<a href="#">Conferir Meses anteriores</a>
		    </div>
		    
			<div class="col-lg-6 col-xs-12 ml-auto panel">
				<h1>Gráfico</h1>
				<button id="mostraPizza">Gráfico Pizza</button>
				<button id="mostraBarras">Gráfico Barra</button>
				<button id="mostraLinhas">Gráfico Linha</button>
				<div id="chartPie" style="height: 370px; width: 100%;"></div>
				<div id="chartBar" style="height: 370px; width: 100%;"></div>
				<div id="chartLine" style="height: 370px; width: 100%;"></div>
			</div>
		</div>
		<!--
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
		
		-->
	</div>
	
</main>
	


<!--
-->