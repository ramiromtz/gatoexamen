<?php

require_once "funciones.php";

registerPlayers($_POST['player-x'], $_POST['player-o']);

if (playersRegistered()) {
    header("location: play.php");
}
