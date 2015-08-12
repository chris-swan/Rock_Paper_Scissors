<?php
    require_once "src/Rps.php";

    class RpsTest extends PHPUnit_Framework_TestCase
    {
        function test_rps_rock_draw()
        {
            //Arrange
            $test_Rps = new Rps;
            $player_one = "rock";
            $player_two = "rock";

            //Act
            $result = $test_Rps->$test_rps_rock_draw($player_one, $player_two);

            //Assert
            $this->assertEquals("draw", $result);
        }
    }?>
