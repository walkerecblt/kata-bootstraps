<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Kata;

require __DIR__ . '/../vendor/autoload.php';

class KataTest extends TestCase
{


    public function testDummy()
    {
        $kata = new Kata();
        $this->assertTrue(false);
    }

    public function testNotFailing()
    {
        $this->assertTrue(true);
    }

}
