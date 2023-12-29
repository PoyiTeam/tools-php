<?php

namespace App;

class Utility
{
    public static function printArr(array $array)
    {
        if (count($array) === 0) {
            throw new \Exception("array is empty");
        }

        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

?>