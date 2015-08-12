<?php
    require_once "src/Rps.php";

    class RpsTest extends PHPUnit_Framework_TestCase
    {
        function test_rpsGame_rockDraw()
        {
            //Arrange
            $test_Rps = new Rps;
            $player_one = "rock";
            $player_two = "rock";

            //Act
            $result = $test_Rps->rpsGame($player_one, $player_two);

            //Assert
            $this->assertEquals("It's a draw!", $result);
        }

        function test_rpsGame_rockPaper()
        {
            //Arrange
            $test_Rps = new Rps;
            $player_one = "rock";
            $player_two = "paper";

            //Act
            $result = $test_Rps->rpsGame($player_one, $player_two);

            //Assert
            $this->assertEquals("Player Two Wins!", $result);
        }

        function test_rpsGame_rockScissors()
        {
            //Arrange
            $test_Rps = new Rps;
            $player_one = "rock";
            $player_two = "scissors";

            //Act
            $result = $test_Rps->rpsGame($player_one, $player_two);

            //Assert
            $this->assertEquals("Player One Wins!", $result);
        }
        function test_rpsGame_paperDraw()
        {
            //Arrange
            $test_Rps = new Rps;
            $player_one = "paper";
            $player_two = "paper";

            //Act
            $result = $test_Rps->rpsGame($player_one, $player_two);

            //Assert
            $this->assertEquals("It's a draw!", $result);
        }

        function test_rpsGame_paperScissors()
        {
            //Arrange
            $test_Rps = new Rps;
            $player_one = "paper";
            $player_two = "scissors";

            //Act
            $result = $test_Rps->rpsGame($player_one, $player_two);

            //Assert
            $this->assertEquals("Player Two Wins!", $result);
        }

    }
?>
