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
    echo '新增成功';
} else {
    echo '新增失敗';
}

unset($pdo);
?>