angular.module('calculatorApp', [])
    // Set the back-end common URL
    .value('BaseURL', 'https://danielmunnoz.com/cenfotec/calculator/controller.php') // Set this to "/controller.php" when using localhost
    /**
     * Define the service which will be provided by the Back-end
     */
    .service('CalculatorService', ['$http', 'BaseURL',
        function($http, BaseURL) {
            /**
             * Builds the URL to call the method of the Calculator
             *
             * @returns {*} - The result of the operation
             */
            var perform = function (operator, firstDigit, secondDigit) {
                var url = BaseURL + '?operation=' + operator + '&firstDigit=' + firstDigit + '&secondDigit=' + secondDigit;

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