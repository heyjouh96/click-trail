
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 fundo">
  	
  	<div class="container fundo">
  		
  		<div class="page-header">
  			<div class="row">
  				<div class="col-lg-7">
				  	<h2 class="username"><?= $info[0]->nm_Site; ?></h2>
				  	<p class="dominio"><?= $info[0]->ds_Dominio; ?> </p>
				</div>
				<div class="col-lg-4 ml-auto">
					<br>
					
	  				<h2 class="info-clicks"><span><i class="icono-mouse"></i></span><small>Total:</small> <?= $info[0]->total; ?> Clicks</h2>
	  				
				</div>
		  	</div>
		</div>
  	
  	
	  	
		
		<div class="row">
			<div class="col-lg-5 col-xs-12 item-style">
				<h1>Visão Geral</h1>
				<hr>
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Descrição</td>
							<td>Qtd. Clicks</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($itens as $i){ ?>
						<tr>
							<td class="itemDs"><?= $i->ds ?></td>
							<td class="itemQtd"><?= $i->qtd ?></td>
						</tr>  
						<?php } ?>
					</tbody>
				</table>
				
				<!-- ignorar isso aqui -->
				<?php foreach($itens as $i){ ?>
				<div style='display:none'>  
					<progress value="<?= $i->qtd ?>" max="<?= $info[0]->total ?>"></progress> <small class='itemPct'><?= round(($i->qtd * 100)/$info[0]->total, 2) ?> %</small>
				</div>  
				<?php } ?>
				
					
				<h1>Este Mês <small><?= date('F'); ?></small></h1>
				<hr>
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Descrição</td>
							<td>Qtd. Clicks</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($esteMes as $em){ ?>
						<tr>
							<td><?= $em->ds ?></td>
							<td><?= $em->qtd ?></td>
						</tr>  
						<?php } ?>
					</tbody>
				</table>
				
		    </div>
		    
			<div class="col-lg-6 col-xs-12 ml-auto panel">
				<h1>Gráfico</h1>
				<hr>
				<button class="btn btn-dark" id="mostraPizza"><span><i class="icono-pieChart"></i></span>Gráfico Pizza</button>
				<button class="btn btn-dark" id="mostraBarras"><span><i class="icono-barChart"></i></span>Gráfico Barra</button>
				<div id="chartPie" style="height: 370px; width: 100%;"></div>
				<div id="chartBar" style="height: 370px; width: 100%;"></div>
			</div>
		</div>
		
		<hr>
		<div id="outrosMeses">
			
			<?php foreach($totalMeses as $tm){ ?>
			<div style='display:none'>  
				<p class="nmMes"><?= $tm->mes ?></p><small class='qtdMes'><?= $tm->qtd ?></small>
			</div>  
			<?php } ?>
			
			<div id="chartLine" style="height: 370px; width: 100%;"></div>
		</div>
		
	</div>
	
</main>
	