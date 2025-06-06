// Set up the chart
const chart = new Highcharts.Chart({
    chart: {
        renderTo: 'container',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            enabled: false
        }
    },
    tooltip: {
        headerFormat: '<b>{point.key}</b><br>',
        pointFormat: 'Cars sold: {point.y}'
    },
    title: {
        text: 'Sold passenger cars in Norway by brand, May 2024'
    },
    subtitle: {
        text: 'Source: ' +
            '<a href="https://ofv.no/registreringsstatistikk"' +
            'target="_blank">OFV</a>'
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            depth: 25
        }
    },
    series: [{
        data: [
            ['Toyota', 1795],
            ['Volkswagen', 1242],
            ['Volvo', 1074],
            ['Tesla', 832],
            ['Hyundai', 593],
            ['MG', 509],
            ['Skoda', 471],
            ['BMW', 442],
            ['Ford', 385],
            ['Nissan', 371]
        ],
        colorByPoint: true
    }]
});

function showValues() {
    document.getElementById(
        'alpha-value'
    ).innerHTML = chart.options.chart.options3d.alpha;
    document.getElementById(
        'beta-value'
    ).innerHTML = chart.options.chart.options3d.beta;
    document.getElementById(
        'depth-value'
    ).innerHTML = chart.options.chart.options3d.depth;
}

// Activate the sliders
document.querySelectorAll(
    '#sliders input'
).forEach(input => input.addEventListener('input', e => {
    chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
    showValues();
    chart.redraw(false);
}));

showValues();
