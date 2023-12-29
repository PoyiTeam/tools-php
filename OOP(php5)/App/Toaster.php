<?php

namespace App;

class Toaster extends AbstractProduct
{
    protected $slots;

    public function __construct()
    {
        $this->slots = 2;
        $this->turnOn();
    }

    public function toast()
    {
        echo "Toasting bread, slot: {$this->slots}<br>";
    }

    public function setup()
    {

    }
}


?>