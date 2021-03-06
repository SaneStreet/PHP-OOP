<?php 

    class Weather {
        
        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFahrenheit($c) {
            return $c * 9 / 5 + 32;
        }

        public static function determineTempCondition($f) {
            if($f < 40) {
                return self::$tempConditions[0];
            } else if ($f < 70) {
                return self::$tempConditions[1];
            } else {
                return self::$tempConditions[2];
            }
        }
    }

    // print_r(Weather::$tempConditions);
    // echo Weather::celsiusToFahrenheit(20);
    echo Weather::determineTempCondition(50);
    echo Weather::determineTempCondition(80);
    echo Weather::determineTempCondition(20);
    

?>

<html lang="en">
    <head>
        <title>PHP OOP - Static Properties</title>
    </head>
    <body>
        <p>Where the magic happens.</p>
    </body>
</html>