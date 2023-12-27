<?php require "nav-home.php"; // handle errors with “Fatal Error”, stop execute code ?>
<?php require_once "nav-home.php"; // make sure require once ?>
<?php include "nav-about.php"; // handle errors with “warning”, keep execute code ?>
<?php include_once "nav-about.php"; // make sure include once ?>

<?php
echo "include FOO : " . FOO . "<br>";

$data = include "number.php";
echo "<br>";
echo $data;
echo "<br>";
?>

Home page