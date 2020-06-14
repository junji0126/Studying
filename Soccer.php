<?php
//Playerクラス定義ファイルを読み込む
require_once("Player.php");
//Soccerクラスを定義する
class Soccer eXtends Player{
//インスタンスメソッド
public function play(){
    echo "{$this->name}がシュート！","\n";
 }
}
// ?>