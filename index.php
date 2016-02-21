<?php
$proyectName = "Calculator with AngularJS &amp; PHP";
$styleFiles = ["/css/app.css"];
$scriptFiles = ["/js/angular.min.js", "/js/CalculatorService.js", "/js/app.js"];
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo($proyectName); ?></title>
        <!-- Styles -->
<?php foreach ($styleFiles as $style) { ?>
        <link rel="stylesheet" href="<?php echo($style); ?>">
<?php } ?>
    </head>
    <body>

        <div class="calculator" data-ng-app="calculatorApp" data-ng-controller="CalculatorCtrl">
            <div class="calculator__Heading">
                <div id="screen">{{ screen }}</div>
            </div>

            <div class="calculator__Keys clear">
                <div class="panel-1">
                    <button data-ng-click="clearAll()" type="button" class="double">C</button>
                    <button data-ng-click="setValue('%')" ng-disabled="operatorClicked || !input.length" type="button" class="tooltip">%</button>
                    <button data-ng-click="setValue(7)" type="button">7</button>
                    <button data-ng-click="setValue(8)" type="button">8</button>
                    <button data-ng-click="setValue(9)" type="button">9</button>
                    <button data-ng-click="setValue(4)" type="button">4</button>
                    <button data-ng-click="setValue(5)" type="button">5</button>
                    <button data-ng-click="setValue(6)" type="button">6</button>
                    <button data-ng-click="setValue(1)" type="button">1</button>
                    <button data-ng-click="setValue(2)" type="button">2</button>
                    <button data-ng-click="setValue(3)" type="button">3</button>
                    <button data-ng-click="setValue(0)" type="button">0</button>
                    <button data-ng-click="getResult()" ng-disabled="!input.length" type="button" class="calculator__Keys--operator double">=</button>
                </div>

                <div class="panel-2">
                    <button data-ng-click="setValue('÷')" ng-disabled="operatorClicked || !input.length" type="button" class="calculator__Keys--operator">÷</button>
                    <button data-ng-click="setValue('x')" ng-disabled="operatorClicked || !input.length" type="button" class="calculator__Keys--operator">x</button>
                    <button data-ng-click="setValue('-')" ng-disabled="operatorClicked || !input.length" type="button" class="calculator__Keys--operator">-</button>
                    <button data-ng-click="setValue('+')" ng-disabled="operatorClicked || !input.length" type="button" class="calculator__Keys--operator taller">+</button>
                </div>
            </div>
        </div><!-- ends Calculator module -->

        <!-- Scripts -->
<?php foreach ($scriptFiles as $script) { ?>
        <script src="<?php echo($script); ?>"></script>
<?php } ?>
    </body>
</html>