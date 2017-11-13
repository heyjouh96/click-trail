
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
	<br>
  	
  	<div class="container">
	  	<h1><?= $info[0]->nm_Site; ?> <br>
	  		<small><?= $info[0]->ds_Dominio; ?> </small>
	  	</h1>
  	
  	
	  	<p>Total de clicks</p>
	  	<b><?= $info[0]->total; ?> Clicks</b>
		
		<div class="row">
			<div class="col-lg-6 col-xs-12 panel">
				<h2>Visão Geral</h2>
		
					<?php foreach($itens as $i){ ?>
					  
					<p> <b class="itemDs"><?= $i->ds ?></b> : <span class="itemQtd"><?= $i->qtd ?></span> clicks <p>
					  
					<?php } ?>
					
					<?php foreach($itens as $i){ ?>
					
					<div style='display:none'>  
						<progress value="<?= $i->qtd ?>" max="<?= $info[0]->total ?>"></progress> <small class='itemPct'><?= round(($i->qtd * 100)/$info[0]->total, 2) ?> %</small>
					</div>  
					<?php } ?>
		    </div>
			<div class="col-lg-6 col-xs-12 panel">
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