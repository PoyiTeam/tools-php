<?php
use App\RestaurantInterface;
use App\RestaurantInterface;
use App\RestaurantInterface;

declare(strict_types=1);

// require_once "App/FoodApp.php";

// requrie all class under __DIR__
spl_autoload_register(
    function ($class) {
        $formattedClass = str_replace("\\", "/", $class);
        $path = "{$formattedClass}.php";

        require_once $path;
    }
);

use App\{Account, Toaster, ToasterPremium, RestaurantOne, RestaurantTwo, FoodApp};

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

echo "<h3>interfaces</h3>";
$restaurant = new RestaurantOne();
$restaurant->prepareFood();
echo "<br>";

echo "<h3>Polymorphism</h3>";
$restaurant = new FoodApp(new RestaurantTwo());

echo "<h3>Anonymous class</h3>";
$restaurant = new FoodApp(new class implements RestaurantInterface {

});
?>