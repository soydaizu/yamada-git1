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
            <label>名前: <input type="text" name="target_name"></label>
            <br>
            <label>年齢: <input type="number" name="target_age"></label>
            <input type="submit" value="送信" >
            <input type="reset" value="取消" >
        </form>
        <br>
        <?php
            date_default_timezone_set('Asia/Tokyo');
            $now_hour = (int)date("H");
            $now_minute = (int)date("i");
        ?>
        <?php
        if ($_POST['target_name'] && $_POST['target_age']){
         print ($now_hour . "時" . $now_minute . "分です。" . greeting($now_hour) . "！"
            . $_POST['target_name'] . "さん（" . $_POST['target_age'] . "歳）") ;
        }
        elseif (!empty($_POST) && ( $_POST['target_name']=="" || $_POST['target_age']=="")){
            print("※名前・年齢どちらも入力して下さい※");
        }
        else{
            print ("上記フォームを入力して下さい。") ;
        }
        // var_dump($_POST);
        ?>
       </body>
</html>