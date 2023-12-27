<?php

declare(strict_types=1);    //force type

function saySomething($message, $status = true)
{
    echo "{$message} {$status}";
}

function plusOne($num)
{
    $num += 1;
    echo "{$num}";

    return $num;
}

function getParameters(int|float $num = 11, string $msg = "hungry"): array
{
    return [$num, $msg];
}

// return type hint 前面加 "?"，可以接受回傳null
// 任何input value可以接受輸入null
function getMessage(string $msg = null): ?string
{
    $msg = "very hungry";
    return null;
}

// mixed
function inputMixedParam(mixed $param)
{
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


// variadic function
echo "<hr>";
function sum_numbers(bool $dumpArr, int|float ...$nums): int|float // $nums will be an array, size depend on input parameters
{
    if ($dumpArr) {
        var_dump($nums);
    }

    echo "<br>";
    return array_sum($nums);
}
echo sum_numbers(true, 5, 2, 8, 1);


// anonymous function
// treat function as variable
echo "<hr>";
echo "<h3>anoymous function</h3>";

$multiply = function ($num) {
    return $num * 2;
};

echo $multiply(3);
echo "<br>";

$multiply = function ($num) {
    return $num * 3;
};
echo $multiply(4);
echo "<br>";

$multiplier = 3;    // global variable
echo "long version <br>";
// long version
$multiply = function ($num) use ($multiplier) {
    $multiplier = 7;    // local variable
    return $num * $multiplier;
};
echo sum(5, 2, $multiply) . "<br>";  // (5 + 2) * 2

echo "short version <br>";
$multiplier = 5;
$multiply = fn($num) => $num * $multiplier;
function sum($a, $b, $callback)
{
    // callback
    return $callback($a + $b);
}
echo sum(5, 2, $multiply) . "<br>";  // (5 + 2) * 2

?>