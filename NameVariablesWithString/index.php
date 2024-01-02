<?php

$var = 1;

$myVar = ${'myVar' . $var} = 1;

var_dump($myVar);

echo '<br>';
var_dump($myVar1);

echo '<br>';
${'myStr'} = 'hello';

echo '<br>';
var_dump($myStr);

?>