<?php function greeting($hour) {
        $result = "";
        if (6 <= $hour && $hour < 12) {
            $result = "おはよう";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは";
        }
        else {
            $result = "こんばんは";
        }
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>あいさつフォーム</title>
    </head>
    <body>
        <br>
        <form action="index.php" method="POST">
            <label>名前:　<input type="text" name="target_name"></label>
            <br>
            <label>生年月日: <input type="number" name="target_birth">(半角8桁)</label>
            <br>
            <!--<label>今日の日付: <input type="number" name="target_day">(半角8桁)</label>-->
            <!--<br>-->
            <input type="submit" value="送信" >
            <input type="reset" value="取消" >
        </form>
        <br>
        <?php
            date_default_timezone_set('Asia/Tokyo');
            $now_hour = (int)date("H");
            $now_minute = (int)date("i");
            $now_year = (int)date("Y");
            $now_month = (int)date("m");
            $now_day = (int)date("d");
            $now = $now_year . 0 . $now_month . $now_day;
        ?>
        <?php
        if ($_POST['target_name'] && $_POST['target_birth']){
            $target_age = (int)(($now -$_POST['target_birth'])/10000);
            print ($now_hour . "時" . $now_minute . "分です。" . greeting($now_hour) . "！"
            . $_POST['target_name'] . "さん（" . $target_age . "歳）") ;
            // print $now;
        }
        elseif (!empty($_POST) && ( $_POST['target_name']=="" || $_POST['target_birth']=="")){
            print("※名前・生年月日どちらも入力して下さい※");
        }
        else{
            print ("上記フォームを入力して下さい。") ;
        }
        // var_dump($_POST);
        ?>
       </body>
</html>