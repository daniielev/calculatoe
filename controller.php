<?php
// Includes the Calculator logic
require("CalculatorService.php");

// Get an instance of the Calculator class
$calculator = new CalculatorService();

// Sets a flag to check is the operation should be perform
$isRequestValid = $calculator->isRequestValid();

// echo(var_dump($isRequestValid));

?>