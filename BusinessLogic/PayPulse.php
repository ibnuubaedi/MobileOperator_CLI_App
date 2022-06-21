<?php

/**
 * Add pulse to database
 */
function payPulse(int $nominal) : bool
{
    global $mobileOperator;

    if ($nominal){
        $mobileOperator = $mobileOperator + $nominal;
        return true;
    } else {
        return false;
    }
}

?>