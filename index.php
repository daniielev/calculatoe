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
                <div id="screen"></div>
            </div>

            <div class="calculator__Keys clear">
                <div class="panel-1">
                    <button type="button" class="double">C</button>
                    <button type="button" class="tooltip">%</button>
                    <button type="button">7</button>
                    <button type="button">8</button>
                    <button type="button">9</button>
                    <button type="button">4</button>
                    <button type="button">5</button>
                    <button type="button">6</button>
                    <button type="button">1</button>
                    <button type="button">2</button>
                    <button type="button">3</button>
                    <button type="button">0</button>
                    <button type="button" class="calculator__Keys--operator double">=</button>
                </div>

                <div class="panel-2">
                    <button type="button" class="calculator__Keys--operator">÷</button>
                    <button type="button" class="calculator__Keys--operator">x</button>
                    <button type="button" class="calculator__Keys--operator">-</button>
                    <button type="button" class="calculator__Keys--operator taller">+</button>
                </div>
            </div>
        </div><!-- ends Calculator module -->

        <!-- Scripts -->
<?php foreach ($scriptFiles as $script) { ?>
        <script src="<?php echo($script); ?>"></script>
<?php } ?>
    </body>
</html>