<?php
//クラスファイルを読み込む
require_once("Soccer.php");
?>
<!Doctype html>
<html>
<head>
 <meta charset="utf-8">
 <title>Soccerクラスを利用する</title>
</head>
<body>
<pre>
<?php
//Soccerクラスのインスタンスを作る
$player1 = new Soccer("シンジ");
//親クラスのメソッドを試す
$player1->who();
//子クラスのメソッドを試す
$player1->play();
?>
<!-- マジックメソッドを試す　-->
<?php
//Soocerクラスのインスタンスを作る
$player2 = new Soccer("ケイスケ");
// __toString()メソッドを試す
echo "{$player2}";
?>
</pre>
</body>
</html>