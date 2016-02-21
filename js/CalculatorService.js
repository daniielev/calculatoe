angular.module('calculatorApp', [])
    // Set the back-end common URL
    .value('URLBase', 'https://danielmunnoz.com/cenfotec/calculator/controller.php')
    /**
     * Define the service which will be provided by the Back-end
     */
    .service('CalculatorService', ['$http', 'URLBase',
        function($http, URLBase) {
            /**
             * Builds the URL to call the method of the Calculator
             *
             * @returns {*} - The result of the operation
             */
            var perform = function (operator, firstDigit, secondDigit) {
                var url = URLBase + '?operation=' + operator + '&firstDigit=' + firstDigit + '&secondDigit=' + secondDigit;

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