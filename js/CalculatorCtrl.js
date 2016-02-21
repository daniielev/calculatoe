/**
* Controllers Module
*
* Main controller for the calculator app. Contains all the functions
* to be used by the app.
*/
angular.module('calculatorApp.controllers')
.controller('CalculatorCtrl', [
    '$scope',
    'CalcutatorService',
    function($scope, CalcutatorService){
        console.log('Entered to the CalculatorCtrl');
        alert("Hello");
    }
]);