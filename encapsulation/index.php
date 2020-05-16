<?php

// encapsulation is the restriction of access to an objects internals


class Person {
    public function name() {

    }

    public function job() {

    }

    //while it is private, we can still acess this information if we trully want to
    private function age() {

    }
}


class TennisMatch {
    protected $playerOne;

    public function score() {
        // is there a winner
        // does someone have an advantage
        // are they in deuce
    }


    //Set a getter to return it but, be carefull, this can break encapsulation
    public function playerOne() {
        return $this->playerOne;
    }

    protected function hasWinner() {
        //protected is similar to private but a bit more loose
    }

    protected function hasAdvantage() {

    }

    protected function inDeuce() {

    }

}