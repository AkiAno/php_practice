<?php

    $inches = 12;
    $celsius = 100;

    function headline($text){
        return "<h1>{$text}</h1>";
    }

    function in2cm($num) {
        return $num*2.54;
    }

    function celsiusToFahrenheit($celsius) {
        return $celsius*(9/5)+32;
    }

?>