<?php

$cup = "empty";

function fillCup($cupParam)
{
    $cupParam = "filled";
}
fillCup($cup);
echo "normal - cup: " . $cup . "<br>";



$myCup = "empty";
$myFriendsCup = "empty";

function refFillCup(&$cupParam) // 使用 reference(&) 傳 parameter 入 function, 即可避免使用 global
{
    $cupParam = "filled";
}
refFillCup($myCup);
refFillCup($myFriendsCup);
echo "reference - myCup: " . $myCup . "<br>";
echo "reference - myFriendsCup: " . $myFriendsCup . "<br>";
?>