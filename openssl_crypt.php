<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/19/17
 * Time: 12:40
 */

// inputとなる文字列
$data = "This is a sample string value.";
$password = "P@ssw0rd1234";

// 暗号化方式
$method = 'aes-128-cbc';
$ivLength = openssl_cipher_iv_length($method);

// IV生成
$iv = openssl_random_pseudo_bytes($ivLength);

// 暗号化・復号化のオプション
$options = 0;

//暗号化
$encrypted_data = openssl_encrypt($data, $method, $password, $options, $iv);
var_dump($encrypted_data);

// 復号化
$decrypted_date = openssl_decrypt($encrypted_data, $method, $password, $options, $iv);
var_dump($decrypted_date);