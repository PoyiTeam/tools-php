<?php
namespace App;

class Account
{
    private $name;
    private $balance;
    public function __construct($newName, $newBalance)
    {
        $this->name = $newName;
        $this->balance = $newBalance;
    }

    public function getBalance()
    {
        return "$" . $this->balance;
    }

    public function setBalance($newBalance)
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