var ctx = document.getElementById('PorcentajeWinRate');
var victorias = 5; // Número de victorias
var derrotas = 5; // Número de derrotas
var totalPartidas = victorias + derrotas;
var porcentajeVictoria = (victorias / totalPartidas) * 100;

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            'Derrota',
            'Victoria'
        ],
        datasets: [{
            label: 'WinRate',
            data: [derrotas, victorias],
            backgroundColor: [
                '#F54B4E',
                '#2D62D7'
            ],
            hoverOffset: 4,
            borderWidth: 0,
        }]
    },
    options: {
        maintainAspectRatio: false,
        responsive: false,
        width: 70,
        height: 70,
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                enabled: false
            }
        }
    }
});
