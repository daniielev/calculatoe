angular.module('calculatorApp', [])
    /**
     * Definimos un servicio que interactuará con el back-end.
     */
    .service('CalculadoraService', ['$http',
        function($http) {
            // console.log("Hello from the Service");

            /**
             * Builds the URL to call the method of the Calculator
             */
            var perform = function (operator, firstDigit, secondDigit) {
                var url = 'controller.php';
                url += '?operation=addition';
                url += '&firstDigit=' + firstDigit;
                url += '&secondDigit=' + secondDigit;

                return $http({url: url});
            };

            return {
                perform: perform
            }
        }])
;