<?php

namespace App;

class Game
{
    private $score = 0 ;
    private $rolls = [];

    public function scoreRoll(int $score)
    {
        $this->rolls[] = $score;
    }

    public function getScore() : int
    {
        for ($i = 0 ; i < count($this->rolls) ; $i++) {
            if ($this->rolls[$i] == 10 && $i+1 < count($this->rolls)){
                $this->score += 10;
            }

            if ($this->rolls[$i] == 10 && $i+2 < count($this->rolls)){
                $this->score += 10;
            }
        }

        foreach ($this->rolls as $roll) {
            if($roll == 10) {
                $this->score

            }
        }
        return $this->score;
    }
}
