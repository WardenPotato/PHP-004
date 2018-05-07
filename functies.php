<?php

function CelsiusToFahrenheit($temperature){
    return $temperature * 1.8 + 32;
}

function DivideByThree($number){
    return $number % 3 == 0 ? true : false;
}
function ReverseString (string $input){
    return strrev($input);
}