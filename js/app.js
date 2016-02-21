angular.module('calculatorApp')
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('CalculatorCtrl',
        ['$scope', 'CalculadoraService',
            function ($scope, CalculadoraService) {
                $scope.init = function() {
                    $scope.resultado = null;
                    console.log("Hello from the Controller");
                };

                $scope.init();
            }])
;
