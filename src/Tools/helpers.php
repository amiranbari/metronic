<?php

function makePersionNumber($string)
{
    $string = str_replace(0, "۰", $string);
    $string = str_replace(1, "۱", $string);
    $string = str_replace(2, "۲", $string);
    $string = str_replace(3, "۳", $string);
    $string = str_replace(4, "۴", $string);
    $string = str_replace(5, "۵", $string);
    $string = str_replace(6, "۶", $string);
    $string = str_replace(7, "۷", $string);
    $string = str_replace(8, "۸", $string);
    $string = str_replace(9, "۹", $string);
    return $string;
}

function makeEnglishNumber($string)
{
    $string = str_replace("۰", 0, $string);
    $string = str_replace("۱", 1, $string);
    $string = str_replace("۲", 2, $string);
    $string = str_replace("۳", 3, $string);
    $string = str_replace("۴", 4, $string);
    $string = str_replace("۵", 5, $string);
    $string = str_replace("۶", 6, $string);
    $string = str_replace("۷", 7, $string);
    $string = str_replace("۸", 8, $string);
    $string = str_replace("۹", 9, $string);
    return $string;
}


function startsWith($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
