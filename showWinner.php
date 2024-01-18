<?php   

function showWinner(string $winner, array $players): string
{
    if ($winner === PLAYER_ONE_ICON){
        return "VENCEDOR: {$players[0]}.\n";
    } elseif ($winner === PLAYER_TWO_ICON) {
        return "VENCEDOR: {$players[1]}.\n";
    } else {
        return "EMPATE.\n";
    }
}

?>