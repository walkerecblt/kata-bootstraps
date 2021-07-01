<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\BowlingKata;

require __DIR__ . '/../vendor/autoload.php';

class BowlingKataTest extends TestCase
{


}


/*
 * A game consists of 10 frames
 * A frame of at least one, and up to 3 rolls depending on the result of a roll
 * A frames score depends on the number of pins knocked down
 * The score of an open frame (one in which there was not a strike or spare) is the total number of pins knocked down
 * The score of a Strike is 10 plus the number of pins knocked down by the following two balls (in the next one or two frames - up to 30)
 * The score of a Spare is 10 plus the number of pins knocked down by the following roll (in teh next frame - up to 20)
 */
