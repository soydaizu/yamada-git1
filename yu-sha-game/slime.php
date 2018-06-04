<?php

namespace TechAcademy\RPG\Characters;

require_once 'character.php';

class Slime extends Character {
    // クラス変数なので、初期化段階で代入する
    public static $type = 'スライム';

    public $suffix = '';

    function __construct($suffix) {
        parent::__construct(10, 3);
        $this->suffix = $suffix;
    }

    function name() {
        // parent::name() は、 $this::$type を返すので、
        // この Slime クラスのクラス変数 $type ('スライム') を返す
        return parent::name() . $this->suffix;
    }

    static function description() {
        print self::$type . 'は、最弱のモンスターだ！' . PHP_EOL;
    }
}