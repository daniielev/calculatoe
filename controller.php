<?php
// Includes the Calculator logic
require('CalculatorService.php');

// Get an instance of the Calculator class
$calculator = new CalculatorService();

// Sets a flag to check is the operation should be perform
$isRequestValid = $calculator->isRequestValid();

// Sets the global variables for the operations
if ($isRequestValid) {
    // Get the digits to be used
    $numbers = prepareData();
    $firstDigit = $numbers[0];
    $secondDigit = $numbers[1];

    $operationToPerform = $_REQUEST['operation'];
    $result;

    /**
     * Calls the calculator opertation depending on the operator sent,
     * then set the $result with the result of the operation
     */
    switch ($operationToPerform) {
        case 'addition':
            if ($operationToPerform == $calculator::ADDITION) {
                $result = $calculator->addition($firstDigit, $secondDigit);
            }
            break;

        case 'subtraction':
            if ($operationToPerform == $calculator::SUBTRACTION) {
                $result = $calculator->subtraction($firstDigit, $secondDigit);
            }
            break;

        case 'multiplication':
            if ($operationToPerform == $calculator::MULTIPLICATION) {
                $result = $calculator->multiplication($firstDigit, $secondDigit);
            }
            break;

        case 'division':
            if ($operationToPerform == $calculator::DIVISION) {
                $result = $calculator->division($firstDigit, $secondDigit);
            }
            break;

        case 'modulus':
            if ($operationToPerform == $calculator::MODULUS) {
                $result = $calculator->modulus($firstDigit, $secondDigit);
            }
            break;

        // If the function sent does not exist, returns an error
        default:
            $result = "NOT METHOD";
            break;
    };

    // Returns the result of the operation, then exit the current program
    echo $result;
    die();
}

/**
 * Avoids data type issues. Evaluates if the data
 * provided from the controller is numeric, if not
 * then it will set the two digits to integer type.
 *
 * @return {array}
 */
function prepareData () {
    $data = [];

    $firstDigit = $_REQUEST['firstDigit'];

    // If the second value is not present on the request, then its asumed it is 0 (zero)
    $secondDigit = $_REQUEST['secondDigit'];

    // Converts the first value to integer
    if (!is_int($firstDigit)) {
        $firstDigit = (int)$firstDigit;
    }

    // Converts the second value to integer
    if (!is_int($secondDigit)) {
        $secondDigit = (int)$secondDigit;
    }

    // Pushes the parsed values to the $data array
    array_push($data, $firstDigit);
    array_push($data, $secondDigit);

    // Returns both values, NOW integer as type
    return $data;
}

?>