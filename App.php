<?php

require_once __DIR__ . "/Model/MobileOperator.php";
require_once __DIR__ . "/BusinessLogic/PayPulse.php";
require_once __DIR__ . "/BusinessLogic/ShowPulse.php";
require_once __DIR__ . "/Helper/Input.php";
require_once __DIR__ . "/View/ViewMenuMobileOperator.php";
require_once __DIR__ . "/View/ViewPayPulse.php";
require_once __DIR__ . "/View/ViewShowPulse.php";

echo "Mobile Operator App" . PHP_EOL;

viewMenuMobileOperator();

?>