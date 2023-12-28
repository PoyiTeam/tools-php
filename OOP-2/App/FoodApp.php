<?php

namespace App;

class FoodApp
{
    public function __construct(RestaurantInterface $restaurant)
    {
        $this->$restaurant = $restaurant;
        $restaurant->prepareFood();
    }
}