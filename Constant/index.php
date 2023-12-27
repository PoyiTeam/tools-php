<?php

// if FOO is not defined, then define FOO
// if you have an application support plugin
if (!defined('FOO')) {
    define('FOO', 'Hello world!');  // define cannot use in class
}

echo FOO;
?>