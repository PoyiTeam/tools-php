<?php

declare(strict_types=1);

namespace App;  // set directory name same as namespace 

use Datetime as DT;

class Account
{
    public const INTEREST_RATE = 2;
    public static int $count = 0;

    public SocialMedia $socialMedia;

    public string $name;
    public float $balance = 5.5;

    public function __construct(string $newName, float $newBalance)
    {
        $this->name = $newName;
        $this->balance = $newBalance;
        $this->socialMedia = new SocialMedia();

        self::$count++; // $this can only be use in instance
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
    }
}