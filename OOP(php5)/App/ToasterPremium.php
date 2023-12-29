<?php

namespace App;

final class ToasterPremium extends Toaster
{
    protected $slots;
    private $duration;

    public function __construct($newDuration)
    {
        parent::__construct();  // 常常call parent __construct()
        $this->slots = 4;
        $this->duration = $newDuration;
    }
    public function toast()
    {
        parent::toast();    // call parent function
        echo "Toasting bread for {$this->duration} minutes.";
    }
}


?>