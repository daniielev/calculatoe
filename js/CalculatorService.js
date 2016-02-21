angular.module('calculatorApp', [])
    /**
     * Definimos un servicio que interactuará con el back-end.
     */
    .value('URLBase', '/controller.php')
    .service('CalculatorService', ['$http', 'URLBase',
        function($http, URLBase) {
            /**
             * Builds the URL to call the method of the Calculator
             *
             * @returns {*} - The result of the operation
             */
            var perform = function (operator, firstDigit, secondDigit) {
                var url = URLBase + '?operation=' + operator + '&firstDigit=' + firstDigit + '&secondDigit=' + secondDigit;

                console.log(url);

                return $http({
                    method: "GET",
                    url: url
                });
            };

            return {
                perform: perform
            }
        }])
;