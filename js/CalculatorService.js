angular.module('calculatorApp', [])
    /**
     * Definimos un servicio que interactuará con el back-end.
     */
    .service('CalculadoraService', ['$http',
        function($http) {
            console.log("Hello from the Service");
        }])
;