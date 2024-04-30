var ctx = document.getElementById('PorcentajeWinRate');
var victorias = 7; // Número de victorias
var derrotas = 5; // Número de derrotas
var totalPartidas = victorias + derrotas;
var porcentajeVictoria = (victorias / totalPartidas) * 100;

var porcentajeDerrota = 100 - porcentajeVictoria; // Calcula el porcentaje de derrotas

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            'Lose ' + porcentajeDerrota.toFixed(0) + '%', // Agrega el porcentaje de derrotas en la etiqueta
            'Win ' + porcentajeVictoria.toFixed(0) + '%' // Agrega el porcentaje de victorias en la etiqueta
        ],
        datasets: [{
            data: [derrotas, victorias],
            cutout: '70%',
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
                //enabled: false
            }
        }
    }
});

