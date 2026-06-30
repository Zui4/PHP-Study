<?php
class Gun
{

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;

    private $extendedMagazine = 0;
    // ↑フィールド============================

    // コンストラクタ
    function __construct(string $name, int $maxMagazine)
    {
        // 問題1
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
       $this->currentMagazine = 0;
    }

    // 現在の状態を表示
    function echoStatus()
    {
        echo "======現在の状態======" . "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================" . "\n";
    }

    // リロード
    function reload()
 
{
    if ($this->currentMagazine == $this->maxMagazine) {
        echo "リロードの必要はありません\n";
    } else {
        $this->currentMagazine = $this->maxMagazine;
    }
}
     
    


function fire()
{
    // 発砲前に残弾が0
    if ($this->currentMagazine == 0) {
        echo "リロードしてください\n";
        return;
    }

    // 発砲
    $this->currentMagazine--;

    echo $this->name . "を発砲しました。残弾: " . $this->currentMagazine . "発\n";

    // 発砲後に残弾が0
    if ($this->currentMagazine == 0) {
        echo "リロードしてください\n";
    }
}
    


    // 拡張マガジンを装着
function setExtendedMagazine($num)
{
    if (!is_int($num) || $num <= 0) {
        echo "引数が不正です\n";
        return;
    }

    $this->extendedMagazine = $num;
    $this->maxMagazine += $num;
}

   // 拡張マガジンを取外し
function unsetExtendedMagazine()
{
    if ($this->extendedMagazine == 0) {
        echo "拡張マガジンは装着されていません\n";
        return;
    }

    // 最大装弾数を元に戻す
    $this->maxMagazine -= $this->extendedMagazine;
    $this->extendedMagazine = 0;

    // 残弾が最大装弾数を超えていたら修正
    if ($this->currentMagazine > $this->maxMagazine) {
        $this->reload();
    }
}
}