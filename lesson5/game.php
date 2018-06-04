<?php

require_once 'hero.php';
require_once 'slime.php';

class Game {
    static function start() {
        $hero = new Hero();
        $slime_A = new Slime('A');

        $slime_A->attack($hero);
        $hero->attack($slime_A);

        Hero::description();
        Slime::description();
    }
}

Game::start();