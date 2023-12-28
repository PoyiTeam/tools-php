<?php
declare(strict_types=1);

//require_once "App/Account.php";

// requrie all class under __DIR__
spl_autoload_register(
    function ($class) {
        $formattedClass = str_replace("\\", "/", $class);
        $path = "{$formattedClass}.php";

        require_once $path;
    }
);

use App\{Account, Toaster, ToasterPremium, RestaurantOne};

// instance object
$myAccount = new Account('John', 10);
var_dump($myAccount);
echo "<br>";
echo $myAccount->getBalance();
echo $myAccount->setBalance(20);

//inheritance
echo "<h3>inheritance</h3>";
$myToaster = new ToasterPremium(3);
$myToaster->toast();

echo "<br>";

echo "<h3>interfaces</h3>";
$restaurant = new RestaurantOne();
$restaurant->prepareFood();
?>