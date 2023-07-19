<?php
class PaymentHelper{
    public static function splitBill($money,$member){
        //割る
        $kinngaku = (int)($money / $member);
        $result = [];
        for($i = 0;$i < $member;$i++){
            $result[] = $kinngaku;
        }
        //余りを求める
        $amari = $money % $member;
        for($i = 0;$i < $amari;$i++){
            $result[$i] += 1;
        }
        return $result;
    }
}

// 実行 3300 を 3人で割り勘　→　それぞれ 1100 ずつ
$result = \PaymentHelper::splitBill(3300, 3);
var_export($result); // array ( 0 => 1100, 1 => 1100, 2 => 1100, )

// 実行 3302 を 3人で割り勘　→　2人は 1101、1人は 1100
$result = \PaymentHelper::splitBill(3302, 3);
var_export($result); // array ( 0 => 1101, 1 => 1101, 2 => 1100, )