<?php
    

    const LAST_NAME = "Daikon";
    
    echo "Hello, my name is ".LAST_NAME.".<br>";

    $myName = "Radish";
    // string interpolation (format string)
    echo "Hello, my name is {$myName}.<br>";

    $myName.= LAST_NAME;
    echo "Hello, my name is {$myName}.<br>";

?>