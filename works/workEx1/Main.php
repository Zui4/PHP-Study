<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 30 );
$subWeapon = new Gun("Mosin-Nagant", 5 );


$mainWeapon->reload();            // 残弾30
$mainWeapon->fire();              // AK47を発砲しました。残弾: 29発

$mainWeapon->setExtendedMagazine(10);
$mainWeapon->reload();            // 残弾40

$mainWeapon->unsetExtendedMagazine(); // 最大装弾数30に戻る
                                    // 残弾40→30へ修正



// 現在の状態を表示
$mainWeapon->echoStatus();

$subWeapon->reload();            // 残弾30
$subWeapon->fire();              // AK47を発砲しました。残弾: 29発

$subWeapon->setExtendedMagazine(10);
$subWeapon->reload();            // 残弾40

$subWeapon->unsetExtendedMagazine();

$subWeapon->echoStatus();


