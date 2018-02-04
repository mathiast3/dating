<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/2/2018
 * Time: 7:52 PM
 */

function isValidName($fname,$lname){
    $name=$fname.$lname;
    return ctype_alpha($name);
}

function isValidAge($age){
    if($age>=18 && is_numeric($age)){
        return true;
    } else {
        return false;
    }
}

function isValidPhone($num){
    if(is_numeric($num)) {
        return true;
    } else{
        return false;
    }
}

function isValidIndoor($indoor){
    $temp = array("tv","movies","cooking","board games","puzzles","reading","playing cards","video games");


    if(is_array($indoor)) {
        foreach ($indoor as $value) {
            if (!in_array($value, $temp) && $value != null) {
                return false;
            }
        }
    }
    return true;
}

function isValidOutdoor($outdoor){

    $temp = array("hiking","biking","swimming","collecting","walking","climbing");


    if(is_array($outdoor)) {
        foreach ($outdoor as $value) {
            if (!in_array($value, $temp) && $value != null) {
                return false;
            }
        }
    }

    return true;
}