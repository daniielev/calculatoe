<?php

/**
* Represents the calculator.
*
* @constructor
*/
class CalculatorService {

    // Available functions
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
    function addition ($firstVale, $secondValue) {
        if ($this->isRequestValid()) {
            return ($firstVale + $secondValue);
        }
    }

     /**
     * Takes the first digit and the second one and performs
     * a subtraction of both numbers.
     *
     * @param {integer} $firstVale - The first digit from the operation
     * @param {integer} $secondValue - The first digit from the operation
     * @return {integer}
     */
    function subtraction ($firstVale, $secondValue) {
        if ($this->isRequestValid()) {
            return ($firstVale - $secondValue);
        }
    }

    /**
     * Takes the first digit and the second one and performs
     * a multiplication of both numbers.
     *
     * @param {integer} $firstVale - The first digit from the operation
     * @param {integer} $secondValue - The first digit from the operation
     * @return {integer}
     */
    function multiplication ($firstVale, $secondValue) {
        if ($this->isRequestValid()) {
            return ($firstVale * $secondValue);
        }
    }

    /**
     * Takes the first digit and the second one and performs
     * a division of both numbers.
     *
     * @param {integer} $firstVale - The first digit from the operation
     * @param {integer} $secondValue - The first digit from the operation
     * @return {integer}
     */
    function division ($firstVale, $secondValue) {
        if ($this->isRequestValid()) {
            /**
             * PHP shows 'PHP Warning:  Division by zero' when
             * sending the second value as 0 (zero). We show
             * an error then.
             */
            if (!$secondValue == 0) {
                return ($firstVale / $secondValue);
            } else {
                return "ERROR, DIVISION";
            }
        }
    }

     /**
     * Takes the first digit and the second one and performs
     * a modulus of both numbers.
     *
     * @param {integer} $firstVale - The first digit from the operation
     * @param {integer} $secondValue - The first digit from the operation
     * @return {integer}
     */
    function modulus ($firstVale, $secondValue) {
        if ($this->isRequestValid()) {
            if (!$secondValue == 0) {
                return ($firstVale % $secondValue);
            } else {
                return "ERROR, MODULUS";
            }
        }
    }

    /**
     * Searchs in the $_REQUEST variable the required
     * fields in order to perform any operation.
     *
     * @return {boolean}
     */
    public function isRequestValid () {
        $flag = false;

        if ((isset($_REQUEST['operation']) and $_REQUEST['operation'] != '') and
            (isset($_REQUEST['firstDigit']) and $_REQUEST['firstDigit'] != '')) {
            $flag = true;
        }

        return $flag;
    }
}

?>