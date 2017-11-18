
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3 fundo">
  	
  	<div class="container fundo">
  		
  		<div class="page-header">
  			<div class="row">
  				<div class="col-lg-7">
				  	<h2 class="username"><?= $info[0]->nm_Site; ?></h2>
				  	<p class="dominio"><?= $info[0]->ds_Dominio; ?> </p>
				</div>
				<div class="col-lg-3 ml-auto">
	  				<h2 class="info-clicks"><small>Total:</small> <?= $info[0]->total; ?> Clicks</h2>
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
					
					<a href="#" id="mostraMeses">Conferir Meses anteriores</a>
					
		    </div>
		    
			<div class="col-lg-6 col-xs-12 ml-auto panel">
				<h1>Gráfico</h1>
				<button class="btn btn-dark" id="mostraPizza"><span><i class="icono-pieChart"></i></span>Gráfico Pizza</button>
				<button class="btn btn-dark" id="mostraBarras"><span><i class="icono-barChart"></i></span>Gráfico Barra</button>
				<div id="chartPie" style="height: 370px; width: 100%;"></div>
				<div id="chartBar" style="height: 370px; width: 100%;"></div>
			</div>
		</div>
		
		<div id="outrosMeses" style="display:none">
			<h1>Meses Anteriores</h1>
			
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
			sed diam nonummy nibh euismod tincidunt ut laoreet dolore
			magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
			quis nostrud exerci tation ullamcorper suscipit lobortis nisl
			ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
			dolor in hendrerit in vulputate velit esse molestie consequat,
			vel illum dolore eu feugiat nulla facilisis at vero eros et
			accumsan et iusto odio dignissim qui blandit praesent luptatum
			zzril delenit augue duis dolore te feugait nulla facilisi.
			Nam liber tempor cum soluta nobis eleifend option congue
			nihil imperdiet doming id quod mazim placerat facer possim
			assum. Typi non habent claritatem insitam; est usus legentis
			in iis qui facit eorum claritatem. Investigationes
			demonstraverunt lectores legere me lius quod ii legunt saepius.
			Claritas est etiam processus dynamicus, qui sequitur mutationem
			consuetudium lectorum. Mirum est notare quam littera gothica,
			quam nunc putamus parum claram, anteposuerit litterarum formas
			humanitatis per seacula quarta decima et quinta decima. Eodem
			modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
			in futurum.</p>
			
			<div id="chartLine" style="height: 370px; width: 100%;"></div>
		</div>
		
	</div>
	
</main>
	