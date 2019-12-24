<?php
defined('BASEPATH') or exit('No direct script access allowed');
function GenerateCode()
{
    $possible = '0123456789';
    $operator = '+x-';
    $a = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
    $b = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
    $opr = substr($operator, mt_rand(0, strlen($operator) - 1), 1);
    $str_num = array(
        "nol",
        "satu",
        "dua",
        "tiga",
        "empat",
        "lima",
        "enam",
        "tujuh",
        "delapan",
        "sembilan",
    );

    if ($opr == '+') {
        $res = $a + $b;
        $text_opr = "ditambah";
    } else if ($opr == '-') {
        $res = $a - $b;
        $text_opr = "dikurang";
    } else if ($opr == 'x') {
        $res = $a * $b;
        $text_opr = "dikali";
    }
    $code['res'] = $res;
    $code['text'] = "Berapa " . @$str_num[$a] . ' ' . $text_opr . ' ' . @$str_num[$b] . '?';
    return $code;
}
