angular.module('calculatorApp')
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('CalculatorCtrl',
        ['$scope', 'CalculadoraService',
            function ($scope, CalculadoraService) {
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
                        $scope.screen = newValue;
                    }, true);
                };

                /**
                 * Clear the screen and reset the global values
                 */
                $scope.clearAll = function () {
                    $scope.input = "";
                    $scope.input = "";
                    $scope.operatorClicked = false;
                }

                /**
                 * Send the values to the CalculatorService in
                 * order to perform the current operation
                 */
                $scope.getResult = function () {
                    // First checks if there are actual values
                    if ($scope.input != "") {
                        // $scope.screen = "Result";

                        // Restores the operation buttons
                        $scope.operatorClicked = false;

                        // console.log($scope.input);
                        var operatorCollection = ["-", "+", "x", "÷", "%"];

                        if (operatorCollection.indexOf($scope.input) > -1) {
                            console.log("Operation is ready to be performed");
                        }

                        console.log(operatorCollection);
                    }
                }

                $scope.init();
            }])
;
