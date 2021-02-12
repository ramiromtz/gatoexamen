<?php
require_once "./templates/header.php";
?>

<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Comienza a jugar Gato!</h1>
        <h2>Por favor ingresa los nombres de los jugadores</h2>

        <div class="p-name">
            <label for="player-x"> Jugador (Uno)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="p-name">
            <label for="player-o"> Jugador (Dos)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Comenzar</button>
    </div>
</form>

