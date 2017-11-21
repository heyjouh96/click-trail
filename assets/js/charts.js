window.onload = main();
window.onload = mostraPizza();

function mostraPizza(){	
	$('#chartBar, #chartLine').css('display', 'none');
	$('#chartPie').css('display', 'block');
	
    // pega as informações do site_info
    var ds = $('.itemDs').toArray();
    var qtd = $('.itemPct').toArray();
    var infos = [];
    for (var i = 0; i < ds.length; i++ ) {
    	var arr = new Array();
        arr['y'] = parseInt(qtd[i].innerHTML);
        arr['name'] = ds[i].innerHTML;
        console.log(arr);
        infos.push(arr);
    }
    
    var chart = new CanvasJS.Chart("chartPie", {
    	exportEnabled: true,
    	animationEnabled: true,
    	title:{
    		text: "Porcentagem de Clicks"
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
    		dataPoints: infos
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



function main(){
	
	$('#mostraMeses').click(function(e){
		
		$('#outrosMeses').css('display','block');
		$('#chartLine').css('display', 'block');
		
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
					{ x: "Jan", y: 450},
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
	});
	
	$('#chartBar').css('display', 'none');
	
	// PIZZA
	$('#mostraPizza').click(function(e){
		mostraPizza();
	});
	
	// BARRA
	$('#mostraBarras').click(function(e){
		
		$('#chartPie, #chartLine').css('display', 'none');
		$('#chartBar').css('display', 'block');
		
		var ds = $('.itemDs').toArray();
    	var qtd = $('.itemQtd').toArray();
    	var infos = [];
    	for (var i = 0; i < ds.length; i++ ) {
	    	var arr = new Array();
	        arr['y'] = parseInt(qtd[i].innerHTML);
	        arr['label'] = ds[i].innerHTML;
	        console.log(arr);
	        infos.push(arr);
    	}
		
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
				dataPoints: infos
			}]
		});
		chart.render();
	});
	
	// LINHA
	
	
	
}
