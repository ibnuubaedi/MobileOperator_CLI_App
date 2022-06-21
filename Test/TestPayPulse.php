<?php

require_once "../Model/MobileOperator.php";
require_once "../BusinessLogic/ShowPulse.php";
require_once "../BusinessLogic/PayPulse.php";

showPulse();

payPulse(10000);

showPulse();

$payPulse = payPulse(10000);
var_dump($payPulse);

showPulse();




?>