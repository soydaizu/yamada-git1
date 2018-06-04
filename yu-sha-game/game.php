<?php

namespace TechAcademy\RPG;

require_once 'hero.php';
require_once 'slime.php';

use TechAcademy\RPG\Characters\Hero;

class Game {
    static function start() {
        // use した Hero だけは名前空間が必要無し
        $hero = new Hero();
        // use してないので名前空間が必要
        $slime_A = new \TechAcademy\RPG\Characters\Slime('A');

        $slime_A->attack($hero);
        $hero->attack($slime_A);

        Hero::description();
        // 相対的な名前空間でも良い
        // このファイルの名前空間は TechAcademy\RPG なので以降を補足すれば良い
        // 相対的な名前空間の場合には最初の \ は入れない
        Characters\Slime::description();
    }
}

Game::start();