<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
if(isset($_GET['id'])){
    session_start();

    if($_GET['id'] == 0){
        unset($_SESSION['sescart']);
    }else{
        $cart = '';

        if(!isset($_SESSION["sescart"])){

        }else{
            $cart = $_SESSION['sescart'];
        }

        $cart .= (strlen($cart) == 0 ? "" : ",") . $_GET["id"];

        $_SESSION["sescart"] = $cart;

        echo "今回カートに入れた商品IDは" . $_GET["id"] . "<br><br>";
    }
}
?>
<table border="1">
    <tr>
        <th>商品ID</th><th>商品名</th><th><br></th>
    </tr>
    <tr>
        <td>1</td><td>冷蔵庫 AB-12345</td><td><a href="<?=$_SERVER["PHP_SELF"]."?id=1"?>">カートに入れる</a></td>
    </tr>
    <tr>
        <td>2</td><td>エアコン AC-99999</td><td><a href="<?=$_SERVER["PHP_SELF"]."?id=2"?>">カートに入れる</a></td>
    </tr>
    <tr>
        <td>3</td><td>テレビ TV-A3456K-L23</td><td><a href="<?=$_SERVER["PHP_SELF"]."?id=3"?>">カートに入れる</a></td>
    </tr>
    <tr>
        <td>4</td><td>パソコン PC-999999 Win100G</td><td><a href="<?=$_SERVER["PHP_SELF"]."?id=4"?>">カートに入れる</a></td>
    </tr>
    <tr>
        <td>5</td><td>洗濯機 SK-TK2424 380L</td><td><a href="<?=$_SERVER["PHP_SELF"]."?id=5"?>">カートに入れる</a></td>
    </tr>
    <tr>
        <td colspan="3" align="center"><a href="<?=$_SERVER["PHP_SELF"]."?id=0"?>">カートをクリア</a></td>
    </tr>
    <tr>
        <td colspan="3" align="center"><a href="cart.php">カートの中味を見る</a></td>
    </tr>
</table>
</body>
</html>

