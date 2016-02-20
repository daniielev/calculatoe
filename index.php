<?php
$proyectName = "Calculator with AngularJS &amp; PHP";
$styleFiles = ["/css/app.css"];
$scriptFiles = ["/js/angular.min.js", "/js/app.js"];
$keysPanel1 = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", ".", "="];
$keysPanel1 = ["+", "-", "÷", "x"];
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($proyectName); ?></title>
<?php foreach ($styleFiles as $style) { ?>
    <link rel="stylesheet" href="<?php echo($style); ?>">
<?php } ?>
  </head>
    <body>

        <div id="calculator">
            <div class="calculator__Heading">
                <div class="calculator--screen"></div>
            </div>
            <div class="calculator__Keys">
                <div class="panel-1">
                    <button type="button">C</button>
                    <button type="button">%mod</button>
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
                    <button type="button">=</button>
                </div>
                <div class="panel-2">
                    <button type="button">÷</button>
                    <button type="button">x</button>
                    <button type="button">-</button>
                    <button type="button">+</button>
                </div>
            </div>
        </div>

<?php foreach ($scriptFiles as $script) { ?>
        <script src="<?php echo($script); ?>"></script>
<?php } ?>
    </body>
</html>