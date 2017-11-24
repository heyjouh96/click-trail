// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example
var ctx = document.getElementById("myAreaChart");
var Areads = $('.nmMes').toArray();
var Areaqtd = $('.qtdMes').toArray();
var AreaArrDs = [];
var AreaArrQtd = [];
for (var i = 0; i < Areads.length; i++ ) {
  AreaArrDs.push(Areads[i].innerHTML);
  AreaArrQtd.push(parseInt(Areaqtd[i].innerHTML));
}
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: AreaArrDs,
    datasets: [{
      label: "Clicks",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,
      data: AreaArrQtd
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
// -- Bar Chart Example
var ctx = document.getElementById("myBarChart");
var Bards = $('.itemDs').toArray();
var Barqtd = $('.itemQtd').toArray();
var arrBarDs = [];
var arrBarQtd = [];
for (var i = 0; i < Bards.length; i++ ) {
  arrBarDs.push(Bards[i].innerHTML);
  arrBarQtd.push(parseInt(Barqtd[i].innerHTML));
}
var myLineChart = new Chart(ctx, {
  type: 'horizontalBar',
  data: {
    labels: arrBarDs,
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: arrBarQtd,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
// -- Pie Chart Example
var ctx = document.getElementById("myPieChart");
var Pieds = $('.itemDs').toArray();
var Pieqtd = $('.itemPct').toArray();
var arrPieDs = [];
var arrPieQtd = [];
for (var i = 0; i < Pieds.length; i++ ) {
  arrPieDs.push(Pieds[i].innerHTML);
  arrPieQtd.push(parseInt(Pieqtd[i].innerHTML));
}
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: arrPieDs,
    datasets: [{
      data: arrPieQtd,
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
