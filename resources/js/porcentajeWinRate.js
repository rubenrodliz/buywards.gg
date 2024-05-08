var ctx = document.getElementById('PorcentajeWinRate');
let data=document.getElementById('PorcentajeWinRate').getContext('2d');
var victorias = parseInt(data.canvas.attributes.win.value);
var derrotas = parseInt(data.canvas.attributes.lose.value);
var totalPartidas = victorias + derrotas;
var porcentajeVictoria = (victorias / totalPartidas) * 100;
var porcentajeDerrota = 100 - porcentajeVictoria;

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            'Lose ' + porcentajeDerrota.toFixed(0) + '%',
            'Win ' + porcentajeVictoria.toFixed(0) + '%'
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

