<?php
require_once "../mollie-api-php/vendor/autoload.php";
require_once "../library/validatePHP.php";

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey('test_Ds3fz4U9vNKxzCfVvVHJT2sgW5ECD8');

$val = new Validate();

$amount = $val->ValidateData($_POST['amount']);
$description = $val->ValidateData($_POST['description']);


$payment = $mollie->payments->create([
    "amount" =>[
        "currency" => "EUR",
        "value" => "$amount"
    ],
    "description" => "$description",
    "redirectUrl" => "http://localhost:8888/php/PHP/PHP-2/view/confirmpage.php",
    "webhookUrl" => "http://localhost:8888/php/PHP/PHP-2/controller/confirm.php"

]);

header("Location: " . $payment->getCheckoutUrl(), true, 303);