<?php
declare(strict_types=1);

// require_once "App/Account.php";
// require_once "App/SocialMedia.php";

// load all class under __DIR__ path
spl_autoload_register(
    function ($class) {
        $formattedClass = str_replace("\\", "/", $class);
        $path = "{$formattedClass}.php";

        require_once $path;
    }
);


use App\{Account, SocialMedia, Utility};

echo "create object<br>";

$myAccount = null;

if (isset($myAccount)) {
    $myAccount->deposit(10);
}

var_dump($myAccount);

$myAccount = new Account("John", 5);

if (isset($myAccount)) {
    $myAccount->deposit(10);
    $myAccount->deposit(3);
    // $myAccount->deposit(10)->deposit(3);
}


echo "balance : " . $myAccount->balance . "<br>";
var_dump($myAccount);
echo "<br>";

// access constant
var_dump(Account::INTEREST_RATE);
echo "<br>";
// access static properties
var_dump($myAccount::$count);
Utility::printArr([34, 43, 5]);

?>