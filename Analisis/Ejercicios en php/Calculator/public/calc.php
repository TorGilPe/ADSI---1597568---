<?php

require '../src/CalculatorClass.php';

use calculator\CalculatorClass;

try {
  
$number1 = (float) $_GET["number1"];
$number2 = (float) $_GET["number2"];
$operation = (integer) $_GET["operation"];

$calc = new CalculatorClass();

$calc->setnumber1 ($number1);
$calc->setnumber2 ($number2);

if($operation === 1){
    $message = "The sum from" . $number1 . " and " . $number2 . " is " . $calc->sum();
} else if ($operation ===2) {
    $message = "The rest from" . $number1 . " and " . $number2 . " is " . $calc->rest();
} else if ($operation ===3) {
    $message = "The sum milti" . $number1 . " and " . $number2 . " is " . $calc->multi();
} else if ($operation ===4) {
    $message = "The divi from" . $number1 . " and " . $number2 . " is " . $calc->divi();
} else if ($operation ===5) {
    $message = "The log from" . $number1 . " and " . $number2 . " is " . $calc->log();
} else if ($operation ===6) {
    $message = "The squared from" . $number1 . " and " . $number2 . " is " . $calc->squared();
} else if ($operation ===7) {
    $message = "The pow from" . $number1 . " and " . $number2 . " is " . $calc->pow();
} else if ($operation ===8) {
    $message = "The sqrt from" . $number1 . " and " . $number2 . " is " . $calc->sqrt();
} else {
    $message = "Error: The operation is invalid";
}
  
} catch (Exception $exc) {
  
  if($exc->getCode() === 501){
    $message = $exc->getMessage();
  } else {
    echo "I am sorry you have a problem<br>";
    echo $exc->getMessage();
    echo "<br>";
    echo $exc->getTraceAsString();
  }
} finally {
  if ($message !== null){
    require 'result.php';
  }  
}

