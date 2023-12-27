<?php

echo floor(4.4) . "<br>";
echo round(num: 4.5555, precision: 2, mode: PHP_ROUND_HALF_DOWN) . "<br>";

$myArr = [1, 2, 3];
echo count($myArr) . "<br>";
echo array_sum($myArr);
echo "<hr>";

// array function
echo "<h3>Array Function</h3>";

$users = ["John", "Jane", "Bob"];
// check value if exists
if (isset($users[3])) {
    echo "isset() : User found!";
} else {
    echo "isset() : User not found!";
}
echo "<br>";

$users = ["John", "Jane", "Bob", null];
// check keys if exists
if (array_key_exists(3, $users)) {
    echo "array_key_exists() : User found!";
}
echo "<br><br>";

echo "array_filter<br>";
$users = ["John", "Jane", "Bob", null];
$users = array_filter($users);  // filter null or false on default
echo "<pre>" . print_r($users, true) . "</pre>";

echo "array_filter<br>";
$users = ["John", "Jane", "Bob", null];
$users = array_filter($users, fn($user) => $user !== "Bob");
echo "<pre>" . print_r($users, true) . "</pre>";

echo "array_map<br>";
$users = ["John", "Jane", "Bob", null];
$users = array_map(fn($user) => strtoupper($user), $users);
echo "<pre>" . print_r($users, true) . "</pre>";

echo "array_merge<br>";
$users = ["John", "Jane", "Bob", Null];

$users = array_merge($users, ["May", "Jassica"]);
echo "<pre>" . print_r($users, true) . "</pre>";

echo "asort<br>";
asort($users);  // sort values
echo "<pre>" . print_r($users, true) . "</pre>";

echo "ksort<br>";
ksort($users);  // sort keys
echo "<pre>" . print_r($users, true) . "</pre>";

echo "sort<br>";
sort($users);   // sort values and keys
echo "<pre>" . print_r($users, true) . "</pre>";


echo "structure<br>";
$nums = [5, 3, 9, 11];
list($a, $b) = $nums;
echo $a, $b;
[$a, $b] = $nums;
echo $a, $b;

echo "<br>";

$nums = ['example' => 5, 3, 9, 11];
["example" => $x, 0 => $y] = $nums;
echo $x, $y;

echo "<hr>";

// filesystem function
echo "<h3>working with file</h3>";

$directory = scandir(__DIR__);
echo "scandir()<br>";
echo "<pre>" . print_r($directory, true) . "</pre>";


if (!file_exists("foo")) {
    echo "mkdir()<br>";
    mkdir("foo");
    echo "directory made<br>";
}


if (file_exists("foo") && is_dir("foo")) {
    echo "rmdir()<br>";
    rmdir("foo");
    echo "directory deleted<br>";
}


echo "<h3>write something to file</h3>";
if (file_exists("example.txt")) {
    echo "empty filesize : " . filesize("example.txt") . "<br>";

    file_put_contents("example.txt", "Hello");
    echo "write something to file... 'Hello'<br>";

    clearstatcache();
    echo "clear status: clearstatcache()<br>";

    echo "file contents : " . file_get_contents("example.txt") . "<br>";

    clearstatcache();
    echo "clear status: clearstatcache()<br>";

    echo "written filesize : " . filesize("example.txt") . "<br>";
    file_put_contents("example.txt", "");

    clearstatcache();
    echo "clear status: clearstatcache()<br>";

    echo "written filesize : " . filesize("example.txt") . "<br>";
}

?>