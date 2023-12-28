<?php

// connect to mysql
$host = "localhost:3308";
$username = "root";
$password = "";
$database = "mydatabase";

// $link = mysqli_connect($host, $username, $password, $database);
// if (!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// } else {
//     echo "Connect Success<br>";
//     echo "Host: {$link->host_info}<br>";
//     echo "Database: {$database}<br>";
// }
// mysqli_close($link);



$mysql = new mysqli($host, $username, $password, $database);
// $mysql->connect();

if ($mysql->connect_errno) {
    printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
}


// create table
$table = "myTable";

$sql = "CREATE TABLE {$table} ( " .
    "id INT NOT NULL AUTO_INCREMENT, " .
    "title VARCHAR(100) NOT NULL, " .
    "author VARCHAR(40) NOT NULL, " .
    "submission_date DATE, " .
    "PRIMARY KEY ( id )); ";

var_dump($mysql->error_list);
if ($mysql->query($sql)) {
    echo "table created successfully<br>";
}
if ($mysql->errno) {
    echo "Could not create table<br>";
    echo "error code: {$mysql->errno}<br>";
    echo "error message: {$mysql->error}<br>";
}


// $sql = "INSERT ";

$mysql->close();
?>