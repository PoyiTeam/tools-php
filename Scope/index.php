<?php

$x = 5;
include("variables.php");
function printX()
{
    global $x;

    echo "x=" . $x . "<br>";

    $x++;
}

printX();
echo "x=" . $x . "<br>";
echo "<hr>";
// auto clean up local variables in function
function foo()
{
    $a = 1;
    return $a++;
}
echo "a = " . foo() . "<br>";
echo "a = " . foo() . "<br>";
echo "a = " . foo() . "<br>";

echo "<hr>";
// remain static variables while function end
function foo2()
{
    static $a = 1;
    return $a++;
}
echo "a = " . foo2() . "<br>";
echo "a = " . foo2() . "<br>";
echo "a = " . foo2() . "<br>";
?>