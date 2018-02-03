<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/2/2018
 * Time: 7:52 PM
 */

function isValidName($fname,$lname){
    $name=$fname+$lname;
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
    if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $num)) {
        return true;
    } else{
        return false;
    }
}

function isValidIndoor($indoor){
    $temp = array("tv","movies","cooking","board games","puzzles","reading","playing cards","video games");



    foreach ($indoor as $value){
        if(!in_array($value,$temp)){
            return false;
        }
    }
    return true;
}

function isValidOutdoor($outdoor){

    $temp = array("hiking","biking","swimming","collecting","walking","climbing");


    foreach ($outdoor as $value){
        if(!in_array($value,$temp)){
            return false;
        }
    }
    return true;
}