<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/15/17
 * Time: 16:24
 */
header("Content-type: text/html; charset=utf-8");

session_start();

if(!isset($_SESSION["sescart"])){
    $html = "【現在、カートは空です。】";
}else{
    $cart = $_SESSION["sescart"];
    $product = array("冷蔵庫 AB-12345（H)" , "エアコン AC-99999(W)",
        "テレビ TV-A3456K-L23", "パソコン PC-999999 Win100G",
        "洗濯機 SK-TK2424 380L");
    $html = "【現在のカートの状況】<br><br>";
    $cartarray = explode(",", $cart);

    foreach($cartarray as $data){
        $html .= $product[$data-1]."<br>";
    }
}
?>.
<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?=$html?>
<br>
<br>
<a href="index.php">戻る</a>
</body>
</html>