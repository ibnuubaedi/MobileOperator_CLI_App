<?php

require_once __DIR__ . "/../BusinessLogic/PayPulse.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewPayPulse()
{
    $nominal = input("Masukan jumlah yang ingin Anda beli");

    $bought = payPulse((int)$nominal);

    if($bought){
        echo "Pulsa yang Anda beli sebesar Rp. $nominal" . PHP_EOL;
    } else{
        echo "Gagal membeli pulsa" . PHP_EOL;
    }
}

?>