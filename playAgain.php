<?php 

function playAgain(): bool
{
    return filter_var(
        readline("\nDeseja jogar novamente? (true/false): "),
        FILTER_VALIDATE_BOOLEAN
    );
}

?>