<?php

namespace TechAcademy\RPG\Characters;

require_once 'character.php';

class Hero extends Character {
    // クラス変数なので、初期化段階で代入する
    public static $type = '主人公';

    function __construct() {
        parent::__construct(1000, 30);
    }
    
    static function description() {
        print self::$type . 'は、この世界を守る勇者だ！' . PHP_EOL;
    }
}