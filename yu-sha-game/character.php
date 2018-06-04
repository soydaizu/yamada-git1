<?php

namespace TechAcademy\RPG\Characters;

class Character {
    // クラス変数
    public static $type = '';

    public $hp = 1;
    public $power = 1;

    function __construct($hp, $power) {
        $this->hp = $hp;
        $this->power = $power;
    }

    function name() {
        // $this:: によってインスタンス変数ではなく、クラス変数を呼び出している
        return $this::$type;
    }

    function attack($character) {
        $character->hp = $character->hp - $this->power;
        print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;

        if ($character->hp <= 0) {
            $this->defeat($character);
        }
    }

    function defeat($character) {
        print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;
    }
}