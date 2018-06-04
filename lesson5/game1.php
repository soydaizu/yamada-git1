<?php
class Character {
     function name() {
        // $this:: によってインスタンス変数ではなく、クラス変数を呼び出している
        // （$this-> だとインスタンス変数を呼び出してしまう）
        return $this::$type;
    }
}

class Slime extends Character {
    function name() {
        // parent::name() は、 $this::$type を返すので、
        // この Slime クラスのクラス変数 $type ('スライム') を返す
        return parent::name() . $this->suffix;
    }
}

