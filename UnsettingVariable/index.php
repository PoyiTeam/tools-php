<?php
$name = "John";

echo $name;
unset($name);   // free(delete) variable
echo $name;

$names = ["John", "Jane", "Bob"];
print_r($names);
echo "<br>";
unset($names[1]);
print_r($names);
echo "<br>";
$names = array_values($names);  // reset array index
print_r($names);
?>