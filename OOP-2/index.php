<?php
declare(strict_types=1);

require_once "App/Account.php";

// requrie all class under __DIR__
spl_autoload_register(
    function ($class) {
        $formattedClass = str_replace("\\", "/", $class);
        $path = "{$formattedClass}.php";

        require_once $path;
    }
);

use App\{Account};

$myAccount = new Account('John', 10);
var_dump($myAccount);
echo "<br>";
echo $myAccount->getBalance();

?>