<?php
$errors = array();

if(!validColor($color)){
    $errors[$color] = "Please enter a valid color.";
}
$success = sizeof($errors) == 0;

/**
 * validates a color
 * @param String color
 * @return boolean
 */
function validColor($color) {
    global $f3;
    return in_array($color, $f3->get('colors'));
}

/**
 * validates a string (must be alphabetic
 * @param String string
 * @return boolean
 */
function validString($string){
    if(is_string($string) && ctype_alpha($string)){
        return true;
    }
    return false;
}
