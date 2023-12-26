<?php

//if
echo "<h3>if</h3>";

$score = 5;
if ((bool) $score)
{
    var_dump("hello");
}

$score = -7;
if ((bool) $score)
{
    var_dump("world");
}
echo "<br>";

$score = 85;
if ($score < 90){
    var_dump("T1");
}else if($score > 80){
    var_dump("T2");
}else{
    var_dump("F");
}

// switch
echo "<h3>switch</h3>";

$paymentStatus = 1;
switch($paymentStatus){
    case 1:
        var_dump("Succes");
        break;
    case 2:
        var_dump("Pending");
        break;
    default:
        var_dump("Unknown");
}
echo "<br>";

//match
echo "<h3>match</h3>";

$paymentStatus = 2;
$message = match($paymentStatus){
    1 => "Success",
    2 => "Denied",
    3 => "Unknown"
};
var_dump($message);

echo "<hr>";

// while loop
echo "<h3>while</h3>";

$a = 1;
while($a <= 3){
    echo "a = {$a} <br>";
    $a++;
}

// do-while
echo "<h3>do-while</h3>";

$a = 5;
do{
    echo "a = {$a}<br>";
    $a++;
}while($a <= 3);

// for
echo "<h3>for</h3>";

for ($i=1; $i<=3; $i++){
    echo "i = {$i}<br>";
}

echo "<b>continue</b><br>";
for ($i=1; $i<=5; $i++){
    if ($i == 3){
        continue;
    }
    echo "i = {$i}<br>";
}

echo "<b>break</b><br>";
for ($i=1; $i<=5; $i++){
    echo "i = {$i}<br>";
    if ($i == 3){
        break;
    }
}

//foreach
echo "<h3>foreach</h3>";

$foodOrder = [
    "John" => "egg",
    "Jane" => "tomato",
    "Bob" => "orange"];

foreach($foodOrder as $key => $value){
    echo "{$key} : {$value}<br>";
}
?>