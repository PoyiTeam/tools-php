<?php
namespace App;

class Account
{
    private string $name;
    private float $balance;
    public function __construct(string $newName, float $newBalance)
    {
        $this->name = $newName;
        $this->balance = $newBalance;
    }

    public function getBalance()
    {
        return "$" . $this->balance;
    }

    public function setBalance(float $newBalance)
    {
        if ($newBalance < 0) {
            return;
        }

        $this->balance = $newBalance;
        $this->sendEmail();
    }

    private function sendEmail()
    {
        // do send Email
    }
}


?>