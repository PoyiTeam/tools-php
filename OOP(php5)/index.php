<?php

//declare(strict_types=1);

// require_once "App/FoodApp.php";

// requrie all class under __DIR__
spl_autoload_register(
    function ($class) {
        $formattedClass = str_replace("\\", "/", $class);
        $path = "{$formattedClass}.php";

        require_once $path;
    }
);

use App\EmptyArrayException;
use App\Account;
use App\Toaster;
use App\ToasterPremium;
use App\RestaurantOne;
use App\RestaurantTwo;
use App\FoodApp;
use App\RestaurantInterface;
use App\Utility;
use App\CurrentWeek;

// instance object
$myAccount = new Account("John", 10);
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

echo "<h3>Exceptions</h3>";
try {
    Utility::printArr([]);
} catch (EmptyArrayException $e) {
    echo "Custom excpetion: {$e->getMessage()}<br>";
} catch (InvalidArgumentException $e) {
    echo "InvalidArgumentException: {$e->getMessage()}<br>";
} catch (Exception $e) {
    echo "Default exception: {$e->getMessage()}<br>";
} finally {
    echo "Finally block<br>";
}

// Iterator
echo "<h3>Date time iterator</h3>";
$currentWeek = new CurrentWeek();

function foo($iterable)
{
    foreach ($iterable as $key => $value) {
        var_dump($key, $value);
        echo "<br>";
    }
}

foo($currentWeek);

?>