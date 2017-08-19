<?php
/**
 * Created by PhpStorm.
 * User: higashiguchi0kazuki
 * Date: 8/19/17
 * Time: 12:51
 */


function password_hash_test(){
    $password = "P@ssw0rd1234";

    // default設定
    echo password_hash($password, PASSWORD_DEFAULT) . "\n";

    // bcrypt & コスト設定
    $options = [
        'cost' => 12,
    ];
    echo password_hash($password, PASSWORD_BCRYPT, $options);

}

function password_hash_cost_test(){
    $timeTarget = 1.00;
    $cost = 8;

    do{
        $cost++;
        $start = microtime(true);
        password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
        $end = microtime(true);
        echo $cost . "\t";
        echo ($end - $start) . "\n";
    }while(($end - $start) < $timeTarget);
    echo "Application cost found: " . $cost . "\n";
    echo $end - $start;
}

password_hash_cost_test();