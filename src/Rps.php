<?php


    class Rps
    {
        function rpsGame($player_one, $player_two)
        {
            if (($player_one == "rock") && ($player_two == "paper")) {
                $result = "Player Two Wins!";

            }elseif ($player_one == "rock" && $player_two == "scissors") {
                $result = "Player One Wins!";

            }elseif ($player_one == "paper" && $player_two == "scissors") {
                $result = "Player Two Wins!";

            }elseif ($player_one == "paper" && $player_two == "rock") {
                $result = "Player One Wins!";

            }elseif ($player_one == "scissors" && $player_two == "paper") {
                $result = "Player One Wins!";

            }elseif ($player_one == "scissors" && $player_two == "rock") {
                $result = "Player Two Wins!";

            }elseif ($player_one == $player_two) {
                $result = "It's a draw!";
            }

            return $result;
        }

    }

?>
