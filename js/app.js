angular.module('calculatorApp')
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('CalculatorCtrl',
        ['$scope', 'CalculadoraService',
            function ($scope, CalculadoraService) {
                $scope.init = function() {
                    $scope.input = "";
                    $scope.firstDigit = null;
                    $scope.secondDigit = null;
                    $scope.operator = null;

                    $scope.setValue = function (value) {
                        $scope.input += value;
                    };

                    $scope.screen = $scope.input;

                    // Watches every time a digit or operator is clicked to save its value
                    $scope.$watch('input', function(newValue, oldValue) {
                        $scope.screen = newValue;
                    }, true);
                };

                $scope.clearAll = function () {
                    $scope.input = "";
                }

                $scope.getResult = function () {
                    $scope.screen = "Result";
                    $scope.input = "";
                }

                $scope.init();
            }])
;
