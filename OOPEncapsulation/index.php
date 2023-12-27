<?php
declare(strict_types=1);

require_once "App/Account.php";

use App\{Account};

$myAccount = new Account('John', 10);
var_dump($myAccount);
echo "<br>";
echo $myAccount->getBalance();
?>