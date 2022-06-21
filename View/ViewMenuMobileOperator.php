<?php

include_once __DIR__ . "/../Helper/Input.php";
include_once __DIR__ . "/../View/ViewPayPulse.php";
include_once __DIR__ . "/../View/ViewShowPulse.php";

function viewMenuMobileOperator(){
    while (true){
        echo "Selamat datang di Inayah's Mobile Operator" . PHP_EOL;
        echo "1. Cek pulsa" . PHP_EOL;
        echo "2. Isi pulsa" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;

        $choice = input("Masukkan menu yang kamu pilih (1/2/3) ");

        if ($choice == "1"){
            viewShowPulse();
        } elseif($choice == "2"){
            viewPayPulse();
        } elseif ($choice == "3"){
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai jumpa lagi";

}

?>