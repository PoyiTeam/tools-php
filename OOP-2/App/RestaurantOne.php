<?php


namespace App;

use App\RestaurantInterface;

class RestaurantOne implements RestaurantInterface
{
    public function prepareFood()
    {
        echo "Preparing food.";
    }
}

?>