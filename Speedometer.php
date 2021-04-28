<?php

class Speedometer {
    public static function convertKMtoMiles($distance){
        $distance *= 0.621371;
        return $distance = number_format($distance, 2, ",", " ");
    }
}