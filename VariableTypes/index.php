<?php
    // string interpolation (format string)
    $myPHP = "php";
    echo "<p>Let's start practice {$myPHP}<br>";
    echo "<h2>Variable Types</h2>";

    // null data , null output nothing
    $data = null;
    echo "<p>";
    echo "empty variable output : {$data}(null output nothing)<br>";
    echo "variable type : "; 
    var_dump($data);
    echo "</p>";

    // undefine varibale
    echo "<p>";
    echo "undefine variable : ";
    var_dump($undefineVariable);
    echo "</p>";
    
    // boolean : true / false , TRUE / FALSE
    $isLoggedIn = true;
    $isNotLoggedIn = false;
    echo "<p>";
    echo "boolean variable output : ture output {$isLoggedIn} , {$isNotLoggedIn} false output nothing<br>";
    echo "variable type : ";
    var_dump($isLoggedIn);
    echo "</p>";

    // integer
    $age = 30;
    echo "<p>";
    echo "integer : {$age}<br>";
    echo "variable type : ";
    var_dump($age);
    echo "</p>";

    // float
    $weight = 98.7;
    echo "<p>";
    echo "float : {$weight}<br>";
    echo "variable type : ";
    var_dump($weight);
    echo "</p>";

    // string
    $myName = 'example string';
    echo "<p>";
    echo "string : {$myName}<br>";
    echo "variable type : ";
    var_dump($myName);
    echo "</p>";

    // array
    $food = ["Salad", "Burger", "Pizza"];
    echo "<p>";
    echo "array : {$food[0]}, {$food[1]}, {$food[2]} <br>";
    echo "variable type : ";
    var_dump($food); 
    echo "</p>";
    
    // associative array
    $launchOrder = [
        "John" => "salad",
        "Jane" => "burger",
        "Sam" => "pizza"];
    echo "<p>";
    echo "array : {$launchOrder["John"]}, {$launchOrder["Jane"]}, {$launchOrder["Sam"]} <br>";
    echo "variable type : ";
    $launchOrder["John"] = "misosiru";
    echo "array : {$launchOrder["John"]}<br>";
    echo "</p>";

    // multidimensional array
    $launchOrder = [
        "John" => ["salad", "milk tea"],
        "Jane" => "burger",
        "Sam" => "pizza"];
    echo "<p>";
    echo "array : {$launchOrder["John"][1]}<br>";
    $launchOrder["John"] = "misosiru";
    echo "array : {$launchOrder["John"]}<br>";
    echo "</p>";

    const FULL_NAME = "Radish";
?>