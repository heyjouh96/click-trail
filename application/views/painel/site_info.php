
<!--Pizza Grafico-->

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartPie", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "State Operating Funds"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}%</strong>",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			{ y: 26, name: "School Aid", exploded: true },
			{ y: 20, name: "Medical Aid" },
			{ y: 5, name: "Debt/Capital" },
			{ y: 3, name: "Elected Officials" },
			{ y: 7, name: "University" },
			{ y: 17, name: "Executive" },
			{ y: 22, name: "Other Local Assistance"}
		]
	}]
});
chart.render();
}


function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}
/* BOTÃO MOSTRAR E ESCONDER
 $(document).ready(function (e) {
        $("#chartBar").hide();

        $("#btnMostrarEsconder").click(function (e) {
            $("#chartBar").toggle();
        });
    });
*/
//Linha
/*
window.onload = function () {

var chart = new CanvasJS.Chart("chartLine", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Simple Line Chart"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 450 },
			{ y: 414},
			{ y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ y: 460 },
			{ y: 450 },
			{ y: 500 },
			{ y: 480 },
			{ y: 480 },
			{ y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 500 },
			{ y: 480 },
			{ y: 510 }
		]
	}]
});
chart.render();

}

//Barra


window.onload = function () {
	
var chart = new CanvasJS.Chart("chartBar", {
	animationEnabled: true,
	
	title:{
		text:"Fortune 500 Companies by Country"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Number of Companies"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: [
			{ y: 3, label: "Sweden" },
			{ y: 7, label: "Taiwan" },
			{ y: 5, label: "Russia" },
			{ y: 9, label: "Spain" },
			{ y: 7, label: "Brazil" },
			{ y: 7, label: "India" },
			{ y: 9, label: "Italy" },
			{ y: 8, label: "Australia" },
			{ y: 11, label: "Canada" },
			{ y: 15, label: "South Korea" },
			{ y: 12, label: "Netherlands" },
			{ y: 15, label: "Switzerland" },
			{ y: 25, label: "Britain" },
			{ y: 28, label: "Germany" },
			{ y: 29, label: "France" },
			{ y: 52, label: "Japan" },
			{ y: 103, label: "China" },
			{ y: 134, label: "US" }
		]
	}]
});
chart.render();

}
*/
</script>
</head>
<body>
<div id="chartPie" style="height: 370px; width: 100%;"></div>

<!--<div id="chartBar" style="height: 370px; width: 100%;"></div>
<div id="chartLine" style="height: 370px; width: 100%;"></div>


<button id="btnMostrarEsconder" >OI</button>-->

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>



</body>
</html>



    
<!--
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
      
      <!-- ESTE MÊS 
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
      

</div>-->