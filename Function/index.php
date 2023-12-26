<?php

declare(strict_types=1);    //force type

function saySomething($message,$status=true){
    echo "{$message} {$status}";
}

function plusOne($num){
    $num += 1;
    echo "{$num}";

    return $num;
}

function getParameters(int|float $num=11, string $msg="hungry") : array{
    return [$num,$msg];
}

// return type hint 前面加 "?"，可以接受回傳null
// 任何input value可以接受輸入null
function getMessage(string $msg=null): ?string{
    $msg = "very hungry";
    return null;
}

// mixed
function inputMixedParam(mixed $param){
    $param = null;
    return $param;
}

$message = "hello";
saySomething($message);
echo "<br>";

$num = 2;
plusOne($num);

echo "<br>";
$container = getParameters();

echo "<br>";
$hungryMsg = getMessage();

?>