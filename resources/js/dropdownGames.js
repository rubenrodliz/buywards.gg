function toggleGameOpen(id) {
    var game = document.getElementById('game' + id);
    var gameOpen = document.getElementById('game-open' + id);
    if (gameOpen.classList.contains('hidden')) {
        gameOpen.classList.remove('hidden');
    } else {
        gameOpen.classList.add('hidden');
    }
}
