<?php

namespace App;

class FoodApp
{
    public $restaurant;
    public function __construct(RestaurantInterface $newRestaurant)
    {
        $this->restaurant = $newRestaurant;
        $this->restaurant->prepareFood();
    }
}