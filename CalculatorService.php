<?php

/**
* Represents the calculator.
*
* @constructor
*/
class CalculatorService {
    const ADDITION = 'addition';
    const SUBTRACTION = 'subtraction';
    const MULTIPLICATION = 'multiplication';
    const DIVISION = 'division';
    const MODULUS = 'modulus';
    const ISREQUESTVALID = 'isrequestvalid';

    /**
     * Takes the first digit and the second one and performs
     * an addition of both numbers.
     *
     * @param {integer} $firstVale - The first digit from the operation
     * @param {integer} $secondValue - The first digit from the operation
     * @return {integer}
     */
    function addition($firstVale, $secondValue) {
        if (isRequestValid()) {
            return $firstVale . $secondValue;
        }
    }

    /**
     * Searchs in the $_REQUEST variable the required
     * fields in order to perform any operation.
     *
     * @return {boolean}
     */
    public function isRequestValid() {
        $flag = false;

        if ((isset($_REQUEST['operation']) and $_REQUEST['operation'] != '') and
            (isset($_REQUEST['firstDigit']) and $_REQUEST['firstDigit'] != '')) {
            $flag = true;
        }

        return $flag;
    }
}

?>