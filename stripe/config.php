<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
  
// Connect with the database 
$db = new mysqli('localhost', 'root', 'abc123', 'stripe');
   
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
  
$gateway = Omnipay::create('Stripe');
$gateway->setApiKey('sk_test_51HEaxXKGHmoA8vQmv689OsV17fAnLZgvvBMec9MZ4CJmzoPs7bU07Tm4lidS6FY9IQbJfulk8qyzZ74676SoufSk00XCeknI9I');