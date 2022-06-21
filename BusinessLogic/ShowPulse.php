<?php

require_once __DIR__ . "/../Model/MobileOperator.php";

/**
 * Show pulse in display
 */
function showPulse(){
    global $mobileOperator;

    echo "Sisa pulsa Anda Rp. $mobileOperator" . PHP_EOL;
}

?>