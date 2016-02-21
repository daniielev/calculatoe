angular.module('calculatorApp')
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('CalculatorCtrl',
        ['$scope', 'CalculatorService',
            function ($scope, CalculatorService) {
                /**
                 * Initializes the variable values and objects status
                 */
                $scope.init = function() {
                    $scope.input = "";
                    $scope.firstDigit = null;
                    $scope.secondDigit = null;
                    $scope.operator = null;
                    $scope.operatorClicked = false;

                    // Captures the input to the scope
                    $scope.setValue = function (value) {
                        /**
                         * Avoids multiple operations at once
                         *
                         * TODO: allows multiple operations
                         * Eg: (14+1)*2
                         */
                        if (typeof value == "string") {
                            $scope.operatorClicked = true;
                        }

                        // Creates a single strong with the current operation
                        $scope.input += value;
                    };

                    // Sends the input to the calculator screen
                    $scope.screen = $scope.input;

                    // Watches every time a digit or operator is clicked to save its value
                    $scope.$watch('input', function(newValue, oldValue) {
                        if (newValue !== "") {
                            $scope.screen = newValue;
                        }
                    }, true);
                }; // ENDS init FUNCTION

                /**
                 * Clear the screen and reset the global values
                 */
                $scope.clearAll = function () {
                    $scope.input = "";
                    $scope.screen = "";
                    $scope.operatorClicked = false;
                }; // ENDS clearAll FUNCTION

                /**
                 * Send the values to the CalculatorService in
                 * order to perform the current operation
                 */
                $scope.getResult = function () {
                    // First checks if there are actual values
                    if ($scope.input != "") {
                        // Checks if there is a valid operator
                        if (
                            ($scope.input.indexOf("+") != -1) ||
                            ($scope.input.indexOf("x") != -1) ||
                            ($scope.input.indexOf("X") != -1) ||
                            ($scope.input.indexOf("%") != -1) ||
                            ($scope.input.indexOf("-") != -1) ||
                            ($scope.input.indexOf("÷") != -1)
                        ) {
                            var positionToSplit = 0;
                            // Back-up of the operation string
                            var _input = $scope.input;
                            $scope.input = $scope.input.split(/\+|\-|\x|\X|\%|\÷/g);

                            $scope.firstDigit = $scope.input[0];
                            $scope.secondDigit = $scope.input[1];
                            $scope.operator = returnOperator(_input);
                        }

                        // Reset values
                        $scope.input = "";
                        $scope.operatorClicked = false;

                        // Calls the Calculator Service that will perform the operation
                        CalculatorService
                            // Sends the data
                            .perform($scope.operator, $scope.firstDigit, $scope.secondDigit)
                            .then(function(response) {
                                if (response.data) {
                                    // Prints the result
                                    $scope.screen = response.data;
                                }
                            }, function(response) {
                                $scope.finalResult = response;
                            });
                    }
                }; // ENDS getResult FUNCTION

                /**
                 * Search on the current operation string
                 * for the operation and returns it
                 *
                 * @param {string} operationString - The string with the concatenation of the values
                 * @return {string}
                 */
                function returnOperator (operationString) {
                    var operator = "";

                    // Sets the operator value depending on the requested method
                    if (operationString.indexOf("+") != -1) {
                        operator = "addition";
                    } else if (operationString.indexOf("-") != -1) {
                        operator = "subtraction";
                    } else if (operationString.indexOf("%") != -1) {
                        operator = "modulus";
                    } else if (operationString.indexOf("x") != -1 || operationString.indexOf("X") != -1) {
                        operator = "multiplication";
                    } else if (operationString.indexOf("÷") != -1) {
                        operator = "division";
                    }

                    return operator;
                }; // ENDS returnOperator FUNCTION

                $scope.init();
            }])
;
