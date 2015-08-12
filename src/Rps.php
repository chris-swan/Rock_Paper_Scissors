<?php


    class Rps
    {
        function rpsGame($player_one, $player_two)
        {
            if ($player_one === $player_two) {
                $result = "It's a draw!";

            }else
            {
                $result = "Player Two Wins!";
            }
            return $result;
        }

    }

?>
