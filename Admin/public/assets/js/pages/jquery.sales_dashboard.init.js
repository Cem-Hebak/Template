var options = {
  chart: {
      height: 270,
      type: 'donut',
  }, 
  plotOptions: {
    pie: {
      donut: {
        size: '85%',
        labels: {
          show: true,
          name: {
            show: true,
            fontSize: '18px',
            offsetY: -10
          },
          value: {
            show: true,
            fontSize: '22px',
            fontWeight: 'bold',
            color: '#333',
            offsetY: 10,
            formatter: function (val) {
              return val + "%"; // Show percentage symbol
            }
          },
          total: {
            show: true,
            label: 'Attendance',
            color: '#333',
            formatter: function (w) {
              const totalAttend = w.globals.series[0]; // "Attend" percentage from the series array
              return totalAttend + "%"; // Display "Attend" percentage
            }
          }
        }
      }
    }
  },
  dataLabels: {
    enabled: false,
  },

  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
 
  series: [70, 30], // "Absence" and "Attend" percentages
  legend: {
    show: true,
    position: 'bottom',
    horizontalAlign: 'center',
    verticalAlign: 'middle',
    floating: false,
    fontSize: '13px',
    offsetX: 0,
    offsetY: 0,
  },
  labels: [ "Attend", "Absence"], // Updated labels
  colors: ["#2a76f4", "#ff4c4c",], // Colors for distinction
 
  responsive: [{
      breakpoint: 600,
      options: {
        plotOptions: {
            donut: {
              customScale: 0.2
            }
          },        
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }],
  tooltip: {
    y: {
        formatter: function (val) {
            return   val + " %"
        }
    }
  }
}

var chart = new ApexCharts(
  document.querySelector("#ana_device"),
  options
);

chart.render();
