<?php
require_once "templates/header.php";

if (! playersRegistered()) {
    header("location: index.php");
}

tablerodeinicio();
?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>

            <div class="welcome">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . " Ganó!";
                    }
                    else {
                        echo "Es un empate";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    <?php echo playerName('x')?>'s score: <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                    <?php echo playerName('o')?>' score: <b><?php echo score('o')?></b>
                </div>

                <a href="play.php">Jugar de nuevo</a><br />

                <a href="index.php" class="reset-btn">Reiniciar</a>
            </div>

        </td>
    </tr>
</table>

</body>
</html>

