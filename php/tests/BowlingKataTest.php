<?php

namespace Tests;

use App\Game;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

class BowlingKataTest extends TestCase
{
    /** @test */
    public function ShouldCreateNewGame()
    {
        $game = new Game();
        $this->assertNotNull($game);
    }

    /** @test */
    public function ShouldAddPinTotal()
    {
        $game = new Game();
        $game->scoreRoll(0);
        $this->assertEquals(0, $game->getScore());
    }

    /** @test */
    public function ShouldTallyFirstOpenFrame()
    {
        $game = new Game();
        $game->scoreRoll(2 );
        $game->scoreRoll(5 );
        $this->assertEquals(7, $game->getScore());
    }

    /** @test */
    public function ShouldTallyTwoStrikes()
    {
        $game = new Game();
        $game->scoreRoll(10);
        $game->scoreRoll(10);
        $this->assertEquals(30, $game->getScore());
    }

}


/*
 * A game consists of 10 frames
 * A frame of at least one, and up to 3 rolls depending on the result of a roll
 * A frames score depends on the number of pins knocked down
 * The score of an open frame (one in which there was not a strike or spare) is the total number of pins knocked down
 * The score of a Strike is 10 plus the number of pins knocked down by the following two balls (in the next one or two frames - up to 30)
 * The score of a Spare is 10 plus the number of pins knocked down by the following roll (in teh next frame - up to 20)
 */

/*

||0|?|| = 0pts
||2|5|| = 7pts
||10|| = 10pts
||10||10|| = (10+10) + 10 pts
||5|5||5|?|| = ((5 + 5) + 5) + 5pts = 20pts
 */