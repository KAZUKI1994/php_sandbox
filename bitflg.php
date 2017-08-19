<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/19/17
 * Time: 12:26
 */

class OptionInfo{
    const NONE = 0b0;
    const OPTION_A = 0b00001;
    const OPTION_B = 0b00010;
    const OPTION_C = 0B00100;
    const OPTION_D = 0B01000;
    const OPTION_E = 0b10000;
}

$option = OptionInfo::NONE;

// フラグを設定
$option |= OptionInfo::OPTION_A;
$option |= OptionInfo::OPTION_C;
$option |= OptionInfo::OPTION_E;

// フラグを解除
$option &= ~OptionInfo::OPTION_A;

// 有効になっているフラグを表示
if($option == OptionInfo::NONE) echo 'NONE';
if($option & OptionInfo::OPTION_A) echo 'A';
if($option & OptionInfo::OPTION_B) echo 'B';
if($option & OptionInfo::OPTION_C) echo 'C';
if($option & OptionInfo::OPTION_D) echo 'D';
if($option & OptionInfo::OPTION_E) echo 'E';
