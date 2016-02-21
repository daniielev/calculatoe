<?php
$proyectName = "Calculator with AngularJS &amp; PHP";
$proyectDescription = "Online calculator built with AngularJS and the front-end and PHP as Back-end.";
$proyectImageURL = "https://danielmunnoz.com/cenfotec/calculator/img/card.png";
$styleFiles = ["./css/app.css"];
$scriptFiles = ["./js/angular.min.js", "./js/CalculatorService.js", "./js/app.js"];
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo($proyectName); ?></title>
        <meta name="description" content="<?php echo($proyectDescription); ?>">
        <link rel="canonical" href="https://danielmunnoz.com/cenfotec/calculator/">
        <link rel="publisher" href="https://plus.google.com/114681206700495657776">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo($proyectName); ?>" >
        <meta property="og:description" content="<?php echo($proyectDescription); ?>">
        <meta property="og:url" content="https://danielmunnoz.com/cenfotec/calculator/">
        <meta property="og:site_name" content="<?php echo($proyectName); ?>">
        <meta property="og:image" content="<?php echo($proyectImageURL) ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="<?php echo($proyectDescription); ?>">
        <meta name="twitter:title" content="<?php echo($proyectName); ?>">
        <meta name="twitter:site" content="@DaniielEV">
        <meta name="twitter:image" content="<?php echo($proyectImageURL) ?>">
        <!-- Styles -->
<?php foreach ($styleFiles as $style) { ?>
        <link rel="stylesheet" href="<?php echo($style); ?>">
<?php } ?>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="./img/apple-touch-icon-57x57.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="60x60" href="./img/apple-touch-icon-60x60.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="72x72" href="./img/apple-touch-icon-72x72.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="76x76" href="./img/apple-touch-icon-76x76.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="114x114" href="./img/apple-touch-icon-114x114.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="120x120" href="./img/apple-touch-icon-120x120.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="144x144" href="./img/apple-touch-icon-144x144.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="152x152" href="./img/apple-touch-icon-152x152.png?v=Ryy567RpGJ">
        <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon-180x180.png?v=Ryy567RpGJ">
        <link rel="icon" type="image/png" href="./img/favicon-32x32.png?v=Ryy567RpGJ" sizes="32x32">
        <link rel="icon" type="image/png" href="./img/favicon-194x194.png?v=Ryy567RpGJ" sizes="194x194">
        <link rel="icon" type="image/png" href="./img/favicon-96x96.png?v=Ryy567RpGJ" sizes="96x96">
        <link rel="icon" type="image/png" href="./img/android-chrome-192x192.png?v=Ryy567RpGJ" sizes="192x192">
        <link rel="icon" type="image/png" href="./img/favicon-16x16.png?v=Ryy567RpGJ" sizes="16x16">
        <link rel="manifest" href="./img/manifest.json?v=Ryy567RpGJ">
        <link rel="mask-icon" href="./img/safari-pinned-tab.svg?v=Ryy567RpGJ" color="#5bbad5">
        <link rel="shortcut icon" href="./img/favicon.ico?v=Ryy567RpGJ">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="./img/mstile-144x144.png?v=Ryy567RpGJ">
        <meta name="theme-color" content="#ffffff">
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

        <div class="footer">
            <p>Built with AngularJS &amp; PHP. Copyright 2016</p>
            <p><a href="https://github.com/daniielev/calculator" target="_blank">View on Github</a> ~ Powered by <a href="https://danielmunoz.cr" target="_blank">DanielMuñoz</a></p>
        </div>

        <!-- Scripts -->
<?php foreach ($scriptFiles as $script) { ?>
        <script src="<?php echo($script); ?>"></script>
<?php } ?>
    </body>
</html>