/*
GAME RULES:

- The game has 2 players, playing in rounds
- In each turn, a player rolls a dice as many times as he whishes. Each result get added to his ROUND score
- BUT, if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
- The player can choose to 'Hold', which means that his ROUND score gets added to his GLBAL score. After that, it's the next player's turn
- The first player to reach 100 points on GLOBAL score wins the game

*/

var scores, roundScore, activePlayer, gamePlaying/*,dice*/;
init();
//scores = [0,0];
//roundScore = 0;
//activePlayer = 0; // Pierwszy gracz
// dice = Math.floor(Math.random() * 6) + 1;
// document.querySelector('#current-' + activePlayer).textContent = dice;
// document.querySelector('#current-' + activePlayer).innerHTML = '<em>' + dice + '</em>';
// var x = document.querySelector('#score-' + activePlayer).textContent;
// console.log(x);

// Obsługa rzutu kostką
// function btn() {
//     // Zrób cos;
// }
// btn();
// document.querySelector('.btn-roll').addEventListener('click',btn);

document.querySelector('.btn-roll').addEventListener('click',function() {
    if (gamePlaying) {
        // 1. Generuj losowy numer
        var dice = Math.floor(Math.random() * 6) + 1;
        // 2. Wyświetl wynik
        var diceDOM = document.querySelector('.dice');
        diceDOM.style.display = 'block';
        diceDOM.src='dice-' + dice + '.png';

        // 3. Aktualizuj wynik rundy, jeżeli wartość wyrzucona jest różna od 1.
        if (dice !== 1) {
            // Dodaj do wyniku
            roundScore += dice;
            document.getElementById('current-' + activePlayer).textContent = roundScore;
        } else {
           nextPlayer();
        }
    }
});

// Zapis wyniku
document.querySelector('.btn-hold').addEventListener('click', function() {
    if (gamePlaying) {
        // 1. Dodaj wynik do wyniku golbalnego użytkownika
        scores[activePlayer] += roundScore;
        // 2. Aktualizacja interfejsu
        document.querySelector('#score-' + activePlayer).textContent = scores[activePlayer];

        // 3. Sprawdzenie, czy gracz wygrał grę
        if (scores[activePlayer] >= 20) {
            console.log('Gracz aktywny: '+ activePlayer);
            document.getElementById('name-' + activePlayer).textContent = 'Winner !!!';
            document.querySelector('.dice').style.display = 'none';
            document.querySelector('.player-' + activePlayer + '-panel').classList.add('winner');
            document.querySelector('.player-' + activePlayer + '-panel').classList.remove('active');
            gamePlaying = false;
        } else {
            // 4. Zmiana gracza
            nextPlayer();
        }
    }
});

function nextPlayer() {
     // Następny gracz
     activePlayer === 0 ? activePlayer = 1 : activePlayer = 0;
     roundScore = 0;
     document.getElementById('current-0').textContent = 0;
     document.getElementById('current-1').textContent = 0;
     // document.querySelector('.player-0-panel').classList.remove('active');
     // document.querySelector('.player-1-panel').classList.add('active');
     document.querySelector('.player-0-panel').classList.toggle('active');
     document.querySelector('.player-1-panel').classList.toggle('active');
     document.querySelector('.dice').style.display = 'none';
}

// Nowa gra
document.querySelector('.btn-new').addEventListener('click', init);

function init() {
    scores = [0,0];
    roundScore = 0;
    activePlayer = 0; // Pierwszy gracz
    gamePlaying = true;
    // Ukrycie kostki
    document.querySelector('.dice').style.display = 'none';
    // Wyczyszczenie danych wyników
    for (var i = 0; i <= 1; i++) {
        document.getElementById('score-' + i).textContent = 0;
        document.getElementById('current-' + i).textContent = 0;
        document.querySelector('#name-' + i).textContent = 'Player ' + (i + 1);
        document.querySelector('.player-' + activePlayer + '-panel').classList.remove('winner');
        document.querySelector('.player-' + activePlayer + '-panel').classList.remove('active');
    }
    document.querySelector('.player-' + activePlayer + '-panel').classList.add('active');
}