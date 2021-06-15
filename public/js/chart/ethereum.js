function renderChart(data, dates) {
    var options = {
        chart: {
            type: 'line'
        },
        series: [{
            name: 'Ethereum daily price',
            data: data
        }],
        xaxis: {
            categories: [],
            labels: {
                 show: false
            }
        },
        yaxis: {
            show: true,
            labels: {
                 show: false
            }
        }
        }
        var chart = new ApexCharts(document.querySelector("#chart"), options);
    
        chart.render();
}