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
    }?>
