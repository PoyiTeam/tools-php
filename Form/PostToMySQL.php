<?php

$data = [$_POST["ac"], $_POST["pw"]];

// connect to mysql
$dbname = "mydatabase";
$host = "mysql:host=localhost:3308;dbname={$dbname}";
$username = "root";
$password = "";
try {
    $pdo = new PDO($host, $username, $password);
    $pdo->exec('SET CHARACTER SET utf8mb4');
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

$sql = "INSERT INTO myTable (ac,pw) VALUES (\"{$data[0]}\",\"{$data[1]}\")";
$sth = $pdo->prepare($sql);

if ($sth->execute($data)) {
    echo 'insert successed';
} else {
    echo 'insert failed';
}

unset($pdo);
?>