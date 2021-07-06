<?php

namespace App;

class Game
{
    private $score = 0 ;
    private $frames = [];
    private $currentFrame = 0;

    public function scoreRoll(int $score)
    {
        if(!empty($this->frames[$this->currentFrame])){
            $this->frames[$this->currentFrame] += $score;
        }
        $this->score += $score;
    }

    public function getScore() : int
    {
        return $this->score;
    }
}
